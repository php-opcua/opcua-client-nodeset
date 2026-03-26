<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterFloatingLimit structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterFloatingLimit
{
    public function __construct(
        public int $Time_delay,
        public mixed $Setpoint_reference,
        public float $Low_diff_limit,
        public float $High_diff_limit,
        public float $Deadband,
    ) {
    }
}
