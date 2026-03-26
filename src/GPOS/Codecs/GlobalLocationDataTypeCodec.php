<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\GPOS\Types\GlobalLocationDataType;

/**
 * Codec for the GlobalLocationDataType structured data type.
 *
 * @generated
 */
class GlobalLocationDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return GlobalLocationDataType
     */
    public function decode(BinaryDecoder $decoder): GlobalLocationDataType
    {
        return new GlobalLocationDataType(
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
        $encoder->writeExtensionObject($value->Position);
        $encoder->writeExtensionObject($value->Orientation);
    }
}
