<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\ISA95\Types\ISA95TestResultMeasurementDataType;

/**
 * Codec for the ISA95TestResultMeasurementDataType structured data type.
 *
 * @generated
 */
class ISA95TestResultMeasurementDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ISA95TestResultMeasurementDataType
     */
    public function decode(BinaryDecoder $decoder): ISA95TestResultMeasurementDataType
    {
        return new ISA95TestResultMeasurementDataType(
            $decoder->readNodeId(),
            $decoder->readLocalizedText(),
            $decoder->readDateTime(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readDateTime(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeNodeId($value->Id);
        $encoder->writeLocalizedText($value->TestResultDescription);
        $encoder->writeDateTime($value->Date);
        $encoder->writeExtensionObject($value->Result);
        $encoder->writeExtensionObject($value->ResultUnitOfMeasure);
        $encoder->writeDateTime($value->Expiration);
    }
}