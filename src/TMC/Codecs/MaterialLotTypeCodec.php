<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\MaterialLotType;

/**
 * Codec for the MaterialLotType structured data type.
 *
 * @generated
 */
class MaterialLotTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MaterialLotType
     */
    public function decode(BinaryDecoder $decoder): MaterialLotType
    {
        return new MaterialLotType(
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readLocalizedText(),
            $decoder->readExtensionObject(),
            Enums\MaterialStockStatusEnumeration::from($decoder->readInt32()),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
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
        $encoder->writeString($value->ID);
        $encoder->writeString($value->MES_ID);
        $encoder->writeLocalizedText($value->Description);
        $encoder->writeExtensionObject($value->MaterialDefinition);
        $encoder->writeInt32($value->Status->value);
        $encoder->writeExtensionObject($value->ProductionDate);
        $encoder->writeExtensionObject($value->BestUsedBeforeDate);
        $this->writeArray($encoder, $value->Properties, fn ($item) => $encoder->writeExtensionObject($item));
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