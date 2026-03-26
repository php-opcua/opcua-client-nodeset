<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\ScanData;

/**
 * Codec for the ScanData structured data type.
 *
 * @generated
 */
class ScanDataCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ScanData
     */
    public function decode(BinaryDecoder $decoder): ScanData
    {
        return new ScanData(
            $decoder->readByteString(),
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeByteString($value->ByteString);
        $encoder->writeString($value->String);
        $encoder->writeExtensionObject($value->Epc);
        $encoder->writeExtensionObject($value->Custom);
    }
}
