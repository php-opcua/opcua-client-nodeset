<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\FDI\Types\RegisterNodesResult;

/**
 * Codec for the RegisterNodesResult structured data type.
 *
 * @generated
 */
class RegisterNodesResultCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RegisterNodesResult
     */
    public function decode(BinaryDecoder $decoder): RegisterNodesResult
    {
        return new RegisterNodesResult(
            $decoder->readInt32(),
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
        $encoder->writeInt32($value->Status);
        $this->writeArray($encoder, $value->RegisteredNodes, fn ($item) => $encoder->writeExtensionObject($item));
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