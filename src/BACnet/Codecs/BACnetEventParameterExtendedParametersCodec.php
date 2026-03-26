<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterExtendedParameters;

/**
 * Codec for the BACnetEventParameterExtendedParameters structured data type.
 *
 * @generated
 */
class BACnetEventParameterExtendedParametersCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterExtendedParameters
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterExtendedParameters
    {
        return new BACnetEventParameterExtendedParameters(
            $decoder->readDouble(),
            $decoder->readUInt32(),
            $decoder->readBoolean(),
            $decoder->readDouble(),
            $this->readArray($decoder, fn () => $decoder->readByte()),
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $decoder->readUInt32(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
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
        $encoder->writeDouble($value->Real);
        $encoder->writeUInt32($value->Unsigned);
        $encoder->writeBoolean($value->Boolean);
        $encoder->writeDouble($value->Double);
        $this->writeArray($encoder, $value->Octed, fn ($item) => $encoder->writeByte($item));
        $encoder->writeString($value->CharacterString);
        $encoder->writeExtensionObject($value->BitString);
        $encoder->writeUInt32($value->Enum);
        $encoder->writeExtensionObject($value->Date);
        $encoder->writeExtensionObject($value->Time);
        $encoder->writeExtensionObject($value->ObjectIdentifier);
        $encoder->writeExtensionObject($value->Reference);
        $encoder->writeInt32($value->Integer);
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
