<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterUnsignedOutOfRange structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterUnsignedOutOfRange
{
    public function __construct(
        public int $Time_delay,
        public int $Low_limit,
        public int $High_limit,
        public int $Deadband,
    ) {
    }
}
