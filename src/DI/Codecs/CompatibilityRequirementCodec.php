<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\DI\Types\CompatibilityRequirement;

/**
 * Codec for the CompatibilityRequirement structured data type.
 *
 * @generated
 */
class CompatibilityRequirementCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return CompatibilityRequirement
     */
    public function decode(BinaryDecoder $decoder): CompatibilityRequirement
    {
        return new CompatibilityRequirement(
            $decoder->readString(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            Enums\ComparisonOperation::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->Variable);
        $this->writeArray($encoder, $value->Values, fn ($item) => $encoder->writeExtensionObject($item));
        $encoder->writeInt32($value->Operation->value);
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