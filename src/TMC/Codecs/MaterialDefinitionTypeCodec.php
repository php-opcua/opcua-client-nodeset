<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\MaterialDefinitionType;

/**
 * Codec for the MaterialDefinitionType structured data type.
 *
 * @generated
 */
class MaterialDefinitionTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MaterialDefinitionType
     */
    public function decode(BinaryDecoder $decoder): MaterialDefinitionType
    {
        return new MaterialDefinitionType(
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readLocalizedText(),
            $decoder->readExtensionObject(),
            $decoder->readBoolean(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readUInt32(),
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
        $encoder->writeExtensionObject($value->BaseUnitOfMeasure);
        $encoder->writeBoolean($value->BatchManaged);
        $encoder->writeString($value->GroupID);
        $encoder->writeString($value->ParentGroupID);
        $encoder->writeUInt32($value->ShelfLife);
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