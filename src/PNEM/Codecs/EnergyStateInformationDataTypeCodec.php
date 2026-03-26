<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PNEM\Types\EnergyStateInformationDataType;

/**
 * Codec for the EnergyStateInformationDataType structured data type.
 *
 * @generated
 */
class EnergyStateInformationDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return EnergyStateInformationDataType
     */
    public function decode(BinaryDecoder $decoder): EnergyStateInformationDataType
    {
        return new EnergyStateInformationDataType(
            $decoder->readByte(),
            $decoder->readByte(),
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
        $encoder->writeByte($value->IDSource);
        $encoder->writeByte($value->IDDestination);
        $encoder->writeExtensionObject($value->RegularTimeToOperate);
        $encoder->writeFloat($value->ModePowerConsumption);
    }
}