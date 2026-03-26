<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PackML\Types\PackMLCountDataType;

/**
 * Codec for the PackMLCountDataType structured data type.
 *
 * @generated
 */
class PackMLCountDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PackMLCountDataType
     */
    public function decode(BinaryDecoder $decoder): PackMLCountDataType
    {
        return new PackMLCountDataType(
            $decoder->readInt32(),
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $decoder->readInt32(),
            $decoder->readInt32(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->ID);
        $encoder->writeString($value->Name);
        $encoder->writeExtensionObject($value->Unit);
        $encoder->writeInt32($value->Count);
        $encoder->writeInt32($value->AccCount);
    }
}