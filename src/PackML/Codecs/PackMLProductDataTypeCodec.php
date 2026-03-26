<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PackML\Types\PackMLProductDataType;

/**
 * Codec for the PackMLProductDataType structured data type.
 *
 * @generated
 */
class PackMLProductDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PackMLProductDataType
     */
    public function decode(BinaryDecoder $decoder): PackMLProductDataType
    {
        return new PackMLProductDataType(
            $decoder->readInt32(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->ProductID);
        $this->writeArray($encoder, $value->ProcessVariables, fn ($item) => $encoder->writeExtensionObject($item));
        $this->writeArray($encoder, $value->Ingredients, fn ($item) => $encoder->writeExtensionObject($item));
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