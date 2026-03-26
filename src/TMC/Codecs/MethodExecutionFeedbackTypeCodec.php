<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\MethodExecutionFeedbackType;

/**
 * Codec for the MethodExecutionFeedbackType structured data type.
 *
 * @generated
 */
class MethodExecutionFeedbackTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MethodExecutionFeedbackType
     */
    public function decode(BinaryDecoder $decoder): MethodExecutionFeedbackType
    {
        return new MethodExecutionFeedbackType(
            $decoder->readBoolean(),
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
        $encoder->writeBoolean($value->Success);
        $this->writeArray($encoder, $value->Message, fn ($item) => $encoder->writeExtensionObject($item));
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