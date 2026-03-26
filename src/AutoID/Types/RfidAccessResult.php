<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the RfidAccessResult structured data type.
 *
 * @generated
 */
readonly class RfidAccessResult
{
    public function __construct(
        public mixed $CodeTypeRWData,
        public mixed $RWData,
        public ?int $Antenna,
        public ?int $CurrentPowerLevel,
        public ?int $PC,
        public ?string $Polarization,
        public ?int $Strength,
    ) {
    }
}
