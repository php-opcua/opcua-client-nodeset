<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterChangeOfCharacterString;

/**
 * Codec for the BACnetEventParameterChangeOfCharacterString structured data type.
 *
 * @generated
 */
class BACnetEventParameterChangeOfCharacterStringCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterChangeOfCharacterString
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterChangeOfCharacterString
    {
        return new BACnetEventParameterChangeOfCharacterString(
            $decoder->readUInt32(),
            $this->readArray($decoder, fn () => $decoder->readString()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt32($value->Time_delay);
        $this->writeArray($encoder, $value->AlarmValues, fn ($item) => $encoder->writeString($item));
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
