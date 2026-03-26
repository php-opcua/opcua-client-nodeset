<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterDoubleOutOfRange structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterDoubleOutOfRange
{
    public function __construct(
        public int $Time_delay,
        public float $Low_limit,
        public float $High_limit,
        public float $Deadband,
    ) {
    }
}
