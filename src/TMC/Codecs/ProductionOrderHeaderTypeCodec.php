<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\ProductionOrderHeaderType;

/**
 * Codec for the ProductionOrderHeaderType structured data type.
 *
 * @generated
 */
class ProductionOrderHeaderTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ProductionOrderHeaderType
     */
    public function decode(BinaryDecoder $decoder): ProductionOrderHeaderType
    {
        return new ProductionOrderHeaderType(
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $decoder->readDouble(),
            $decoder->readBoolean(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readString(),
            $decoder->readLocalizedText(),
            $decoder->readString(),
            $decoder->readLocalizedText(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->Number);
        $encoder->writeExtensionObject($value->ProducedMaterial);
        $encoder->writeDouble($value->TargetQuantity);
        $encoder->writeBoolean($value->ContinueAtJobEnd);
        $encoder->writeExtensionObject($value->TargetStartTime);
        $encoder->writeExtensionObject($value->TargetEndTime);
        $encoder->writeString($value->DataSetID);
        $encoder->writeLocalizedText($value->DataSetDescription);
        $encoder->writeString($value->MaterialListID);
        $encoder->writeLocalizedText($value->MaterialListDescription);
    }
}
