<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Types;

/**
 * DTO for the PnDeviceDiagnosisDataType structured data type.
 *
 * @generated
 */
readonly class PnDeviceDiagnosisDataType
{
    public function __construct(
        public int $API,
        public int $Slot,
        public int $Subslot,
        public int $ChannelNumber,
        public Enums\PnChannelTypeEnumeration $Type,
        public Enums\PnChannelAccumulativeEnumeration $Accumulative,
        public Enums\PnChannelMaintenanceEnumeration $Maintenance,
        public Enums\PnChannelSpecifierEnumeration $Specifier,
        public Enums\PnChannelDirectionEnumeration $Direction,
        public int $UserStructureIdentifier,
        public int $ChannelErrorType,
        public int $ExtChannelErrorType,
        public int $ExtChannelAddValue,
        public int $QualifiedChannelQualifier,
        public string $ManufacturerData,
        public LocalizedText $Message,
        public LocalizedText $HelpText,
    ) {
    }
}