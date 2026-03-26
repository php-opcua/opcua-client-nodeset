<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Woodworking\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Woodworking\Types\WwMessageArgumentValueDataType;

/**
 * Codec for the WwMessageArgumentValueDataType structured data type.
 *
 * @generated
 */
class WwMessageArgumentValueDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return WwMessageArgumentValueDataType
     */
    public function decode(BinaryDecoder $decoder): WwMessageArgumentValueDataType
    {
        return new WwMessageArgumentValueDataType(
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $decoder->readBoolean(),
            $decoder->readInt16(),
            $decoder->readInt32(),
            $decoder->readInt64(),
            $decoder->readSByte(),
            $decoder->readUInt16(),
            $decoder->readUInt32(),
            $decoder->readUInt64(),
            $decoder->readByte(),
            $decoder->readDateTime(),
            $decoder->readGuid(),
            $decoder->readLocalizedText(),
            $decoder->readDouble(),
            $decoder->readFloat(),
            $decoder->readString(),
            $decoder->readString(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $this->writeArray($encoder, $value->Array, fn ($item) => $encoder->writeExtensionObject($item));
        $encoder->writeBoolean($value->Boolean);
        $encoder->writeInt16($value->Int16);
        $encoder->writeInt32($value->Int32);
        $encoder->writeInt64($value->Int64);
        $encoder->writeSByte($value->SByte);
        $encoder->writeUInt16($value->UInt16);
        $encoder->writeUInt32($value->UInt32);
        $encoder->writeUInt64($value->UInt64);
        $encoder->writeByte($value->Byte);
        $encoder->writeDateTime($value->DateTime);
        $encoder->writeGuid($value->Guid);
        $encoder->writeLocalizedText($value->LocalizedText);
        $encoder->writeDouble($value->Double);
        $encoder->writeFloat($value->Float);
        $encoder->writeString($value->String);
        $encoder->writeString($value->Other);
    }

    private function readArray(BinaryDecoder $decoder, callable $readItem): array
    {
        $count = $decoder->readInt32();
        $items = [];
        for ($i = 0; $i < $count; $i++) {
            $items[] = $readItem();
        }

        return $items;
    }

    private function writeArray(BinaryEncoder $encoder, array $items, callable $writeItem): void
    {
        $encoder->writeInt32(count($items));
        foreach ($items as $item) {
            $writeItem($item);
        }
    }
}