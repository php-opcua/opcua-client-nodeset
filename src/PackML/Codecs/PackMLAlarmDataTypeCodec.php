<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PackML\Types\PackMLAlarmDataType;

/**
 * Codec for the PackMLAlarmDataType structured data type.
 *
 * @generated
 */
class PackMLAlarmDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PackMLAlarmDataType
     */
    public function decode(BinaryDecoder $decoder): PackMLAlarmDataType
    {
        return new PackMLAlarmDataType(
            $decoder->readInt32(),
            $decoder->readInt32(),
            $decoder->readString(),
            $decoder->readInt32(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readBoolean(),
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
        $encoder->writeInt32($value->Value);
        $encoder->writeString($value->Message);
        $encoder->writeInt32($value->Category);
        $encoder->writeExtensionObject($value->DateTime);
        $encoder->writeExtensionObject($value->AckDateTime);
        $encoder->writeBoolean($value->Trigger);
    }
}