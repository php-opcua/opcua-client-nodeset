<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\MaterialSublotType;

/**
 * Codec for the MaterialSublotType structured data type.
 *
 * @generated
 */
class MaterialSublotTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MaterialSublotType
     */
    public function decode(BinaryDecoder $decoder): MaterialSublotType
    {
        return new MaterialSublotType(
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $decoder->readString(),
            $decoder->readDouble(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
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
        $encoder->writeExtensionObject($value->MaterialLot);
        $encoder->writeString($value->MaterialStorageLocationID);
        $encoder->writeDouble($value->Quantity);
        $encoder->writeString($value->CarrierID);
        $encoder->writeString($value->RelativePositionID);
        $encoder->writeString($value->ParentSublotID);
        $this->writeArray($encoder, $value->Sublots, fn ($item) => $encoder->writeExtensionObject($item));
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
