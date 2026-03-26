<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\ECM\Types\StandbyModeTransitionDataType;

/**
 * Codec for the StandbyModeTransitionDataType structured data type.
 *
 * @generated
 */
class StandbyModeTransitionDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return StandbyModeTransitionDataType
     */
    public function decode(BinaryDecoder $decoder): StandbyModeTransitionDataType
    {
        return new StandbyModeTransitionDataType(
            $decoder->readByte(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readFloat(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeByte($value->IDDestination);
        $encoder->writeExtensionObject($value->CurrentTimeToDestination);
        $encoder->writeExtensionObject($value->CurrentTimeToOperate);
        $encoder->writeFloat($value->EnergyConsumptionToDestination);
    }
}