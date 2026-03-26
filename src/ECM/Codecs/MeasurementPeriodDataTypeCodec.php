<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\ECM\Types\MeasurementPeriodDataType;

/**
 * Codec for the MeasurementPeriodDataType structured data type.
 *
 * @generated
 */
class MeasurementPeriodDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MeasurementPeriodDataType
     */
    public function decode(BinaryDecoder $decoder): MeasurementPeriodDataType
    {
        return new MeasurementPeriodDataType(
            $decoder->readExtensionObject(),
            Enums\MeasurementPeriodEnum::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeExtensionObject($value->Duration);
        $encoder->writeInt32($value->Definition->value);
    }
}