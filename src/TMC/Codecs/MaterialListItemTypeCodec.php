<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\MaterialListItemType;

/**
 * Codec for the MaterialListItemType structured data type.
 *
 * @generated
 */
class MaterialListItemTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MaterialListItemType
     */
    public function decode(BinaryDecoder $decoder): MaterialListItemType
    {
        return new MaterialListItemType(
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readExtensionObject(),
            Enums\MaterialStockStatusEnumeration::from($decoder->readInt32()),
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
        $encoder->writeString($value->AssemblyID);
        $encoder->writeString($value->MaterialPointID);
        $encoder->writeString($value->MaterialPointMES_ID);
        $encoder->writeExtensionObject($value->MaterialSublot);
        $encoder->writeInt32($value->MaterialStockStatus->value);
        $this->writeArray($encoder, $value->FollowUpMaterials, fn ($item) => $encoder->writeExtensionObject($item));
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