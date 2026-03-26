<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scheduler\Types\SpecialEventType;

/**
 * Codec for the SpecialEventType structured data type.
 *
 * @generated
 */
class SpecialEventTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return SpecialEventType
     */
    public function decode(BinaryDecoder $decoder): SpecialEventType
    {
        return new SpecialEventType(
            $decoder->readExtensionObject(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $decoder->readByte(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeExtensionObject($value->Period);
        $this->writeArray($encoder, $value->ListOfTimeActions, fn ($item) => $encoder->writeExtensionObject($item));
        $encoder->writeByte($value->EventPriority);
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