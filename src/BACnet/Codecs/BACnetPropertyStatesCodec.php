<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetPropertyStates;

/**
 * Codec for the BACnetPropertyStates structured data type.
 *
 * @generated
 */
class BACnetPropertyStatesCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetPropertyStates
     */
    public function decode(BinaryDecoder $decoder): BACnetPropertyStates
    {
        return new BACnetPropertyStates(
            $decoder->readBoolean(),
            Enums\BACnetBinaryPV::from($decoder->readInt32()),
            Enums\BACnetEventEnumType::from($decoder->readInt32()),
            Enums\BACnetPolarity::from($decoder->readInt32()),
            Enums\BACnetProgramRequest::from($decoder->readInt32()),
            Enums\BACnetProgramStates::from($decoder->readInt32()),
            Enums\BACnetProgramError::from($decoder->readInt32()),
            Enums\BACnetReliability::from($decoder->readInt32()),
            Enums\BACnetEventState::from($decoder->readInt32()),
            Enums\BACnetDeviceStatus::from($decoder->readInt32()),
            $decoder->readExtensionObject(),
            $decoder->readUInt32(),
            Enums\BACnetLifeSafetyMode::from($decoder->readInt32()),
            Enums\BACnetLifeSafetyState::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeBoolean($value->BooleanValue);
        $encoder->writeInt32($value->BinaryValue->value);
        $encoder->writeInt32($value->EventType->value);
        $encoder->writeInt32($value->Polarity->value);
        $encoder->writeInt32($value->ProgramChange->value);
        $encoder->writeInt32($value->ProgramState->value);
        $encoder->writeInt32($value->ProgramError->value);
        $encoder->writeInt32($value->Reliability->value);
        $encoder->writeInt32($value->State->value);
        $encoder->writeInt32($value->SystemStatus->value);
        $encoder->writeExtensionObject($value->Units);
        $encoder->writeUInt32($value->UnsignedValue);
        $encoder->writeInt32($value->LifeSafetyMode->value);
        $encoder->writeInt32($value->LifeSafetyState->value);
    }
}