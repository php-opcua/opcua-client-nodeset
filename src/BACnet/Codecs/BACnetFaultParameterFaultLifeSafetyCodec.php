<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetFaultParameterFaultLifeSafety;

/**
 * Codec for the BACnetFaultParameterFaultLifeSafety structured data type.
 *
 * @generated
 */
class BACnetFaultParameterFaultLifeSafetyCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetFaultParameterFaultLifeSafety
     */
    public function decode(BinaryDecoder $decoder): BACnetFaultParameterFaultLifeSafety
    {
        return new BACnetFaultParameterFaultLifeSafety(
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
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
        $this->writeArray($encoder, $value->List_of_fault_values, fn ($item) => $encoder->writeExtensionObject($item));
        $encoder->writeExtensionObject($value->Mode_property_reference);
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
