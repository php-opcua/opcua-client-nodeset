<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scheduler\Types\CallLocalMethodActionType;

/**
 * Codec for the CallLocalMethodActionType structured data type.
 *
 * @generated
 */
class CallLocalMethodActionTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return CallLocalMethodActionType
     */
    public function decode(BinaryDecoder $decoder): CallLocalMethodActionType
    {
        return new CallLocalMethodActionType(
            $decoder->readNodeId(),
            $decoder->readNodeId(),
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
        $encoder->writeNodeId($value->ObjectId);
        $encoder->writeNodeId($value->MethodId);
        $this->writeArray($encoder, $value->InputValues, fn ($item) => $encoder->writeExtensionObject($item));
        $this->writeArray($encoder, $value->LastOutputValues, fn ($item) => $encoder->writeExtensionObject($item));
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