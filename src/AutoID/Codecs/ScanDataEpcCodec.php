<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\ScanDataEpc;

/**
 * Codec for the ScanDataEpc structured data type.
 *
 * @generated
 */
class ScanDataEpcCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ScanDataEpc
     */
    public function decode(BinaryDecoder $decoder): ScanDataEpc
    {
        return new ScanDataEpc(
            $decoder->readUInt16(),
            $decoder->readByteString(),
            $decoder->readUInt16(),
            $decoder->readUInt16(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt16($value->PC);
        $encoder->writeByteString($value->UId);
        $encoder->writeUInt16($value->XPC_W1);
        $encoder->writeUInt16($value->XPC_W2);
    }
}