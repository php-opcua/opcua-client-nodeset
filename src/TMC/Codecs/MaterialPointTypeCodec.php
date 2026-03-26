<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\MaterialPointType;

/**
 * Codec for the MaterialPointType structured data type.
 *
 * @generated
 */
class MaterialPointTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MaterialPointType
     */
    public function decode(BinaryDecoder $decoder): MaterialPointType
    {
        return new MaterialPointType(
            $decoder->readString(),
            $decoder->readLocalizedText(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $decoder->readExtensionObject(),
            $decoder->readBoolean(),
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
        $encoder->writeLocalizedText($value->Description);
        $this->writeArray($encoder, $value->MaterialCapability, fn ($item) => $encoder->writeExtensionObject($item));
        $encoder->writeExtensionObject($value->ConnectedMaterialPoint);
        $encoder->writeBoolean($value->PropagatesProductionOrder);
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
