<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PackML\Types\PackMLDescriptorDataType;

/**
 * Codec for the PackMLDescriptorDataType structured data type.
 *
 * @generated
 */
class PackMLDescriptorDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PackMLDescriptorDataType
     */
    public function decode(BinaryDecoder $decoder): PackMLDescriptorDataType
    {
        return new PackMLDescriptorDataType(
            $decoder->readInt32(),
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $decoder->readFloat(),
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
        $encoder->writeFloat($value->Value);
    }
}