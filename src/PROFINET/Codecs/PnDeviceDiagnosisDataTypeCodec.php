<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PROFINET\Types\PnDeviceDiagnosisDataType;

/**
 * Codec for the PnDeviceDiagnosisDataType structured data type.
 *
 * @generated
 */
class PnDeviceDiagnosisDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PnDeviceDiagnosisDataType
     */
    public function decode(BinaryDecoder $decoder): PnDeviceDiagnosisDataType
    {
        return new PnDeviceDiagnosisDataType(
            $decoder->readUInt32(),
            $decoder->readUInt16(),
            $decoder->readUInt16(),
            $decoder->readUInt16(),
            Enums\PnChannelTypeEnumeration::from($decoder->readInt32()),
            Enums\PnChannelAccumulativeEnumeration::from($decoder->readInt32()),
            Enums\PnChannelMaintenanceEnumeration::from($decoder->readInt32()),
            Enums\PnChannelSpecifierEnumeration::from($decoder->readInt32()),
            Enums\PnChannelDirectionEnumeration::from($decoder->readInt32()),
            $decoder->readUInt16(),
            $decoder->readUInt16(),
            $decoder->readUInt16(),
            $decoder->readUInt32(),
            $decoder->readUInt32(),
            $decoder->readByteString(),
            $decoder->readLocalizedText(),
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
        $encoder->writeUInt32($value->API);
        $encoder->writeUInt16($value->Slot);
        $encoder->writeUInt16($value->Subslot);
        $encoder->writeUInt16($value->ChannelNumber);
        $encoder->writeInt32($value->Type->value);
        $encoder->writeInt32($value->Accumulative->value);
        $encoder->writeInt32($value->Maintenance->value);
        $encoder->writeInt32($value->Specifier->value);
        $encoder->writeInt32($value->Direction->value);
        $encoder->writeUInt16($value->UserStructureIdentifier);
        $encoder->writeUInt16($value->ChannelErrorType);
        $encoder->writeUInt16($value->ExtChannelErrorType);
        $encoder->writeUInt32($value->ExtChannelAddValue);
        $encoder->writeUInt32($value->QualifiedChannelQualifier);
        $encoder->writeByteString($value->ManufacturerData);
        $encoder->writeLocalizedText($value->Message);
        $encoder->writeLocalizedText($value->HelpText);
    }
}
