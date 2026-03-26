<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the RfidSighting structured data type.
 *
 * @generated
 */
readonly class RfidSighting
{
    public function __construct(
        public int $Antenna,
        public int $Strength,
        public mixed $Timestamp,
        public int $CurrentPowerLevel,
    ) {
    }
}