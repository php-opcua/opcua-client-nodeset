<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\ResultDataType;

/**
 * Codec for the ResultDataType structured data type.
 *
 * @generated
 */
class ResultDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ResultDataType
     */
    public function decode(BinaryDecoder $decoder): ResultDataType
    {
        return new ResultDataType(
            $decoder->readExtensionObject(),
            $decoder->readBoolean(),
            $decoder->readBoolean(),
            $decoder->readBoolean(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->ResultId);
        $encoder->writeBoolean($value->HasTransferableDataOnFile);
        $encoder->writeBoolean($value->IsPartial);
        $encoder->writeBoolean($value->IsSimulated);
        $encoder->writeExtensionObject($value->ResultState);
        $encoder->writeExtensionObject($value->MeasId);
        $encoder->writeExtensionObject($value->PartId);
        $encoder->writeExtensionObject($value->ExternalRecipeId);
        $encoder->writeExtensionObject($value->InternalRecipeId);
        $encoder->writeExtensionObject($value->ProductId);
        $encoder->writeExtensionObject($value->ExternalConfigurationId);
        $encoder->writeExtensionObject($value->InternalConfigurationId);
        $encoder->writeExtensionObject($value->JobId);
        $encoder->writeExtensionObject($value->CreationTime);
        $encoder->writeExtensionObject($value->ProcessingTimes);
        $this->writeArray($encoder, $value->ResultContent, fn ($item) => $encoder->writeExtensionObject($item));
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