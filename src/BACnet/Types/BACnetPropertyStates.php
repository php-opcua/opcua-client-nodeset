<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetPropertyStates structured data type.
 *
 * @generated
 */
readonly class BACnetPropertyStates
{
    public function __construct(
        public bool $BooleanValue,
        public Enums\BACnetBinaryPV $BinaryValue,
        public Enums\BACnetEventEnumType $EventType,
        public Enums\BACnetPolarity $Polarity,
        public Enums\BACnetProgramRequest $ProgramChange,
        public Enums\BACnetProgramStates $ProgramState,
        public Enums\BACnetProgramError $ProgramError,
        public Enums\BACnetReliability $Reliability,
        public Enums\BACnetEventState $State,
        public Enums\BACnetDeviceStatus $SystemStatus,
        public mixed $Units,
        public int $UnsignedValue,
        public Enums\BACnetLifeSafetyMode $LifeSafetyMode,
        public Enums\BACnetLifeSafetyState $LifeSafetyState,
    ) {
    }
}
