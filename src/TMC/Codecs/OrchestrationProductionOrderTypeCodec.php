<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\OrchestrationProductionOrderType;

/**
 * Codec for the OrchestrationProductionOrderType structured data type.
 *
 * @generated
 */
class OrchestrationProductionOrderTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return OrchestrationProductionOrderType
     */
    public function decode(BinaryDecoder $decoder): OrchestrationProductionOrderType
    {
        return new OrchestrationProductionOrderType(
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
        $this->writeArray($encoder, $value->ActiveMachineModules, fn ($item) => $encoder->writeString($item));
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
