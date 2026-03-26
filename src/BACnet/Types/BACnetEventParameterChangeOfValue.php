<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterChangeOfValue structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterChangeOfValue
{
    public function __construct(
        public int $Time_delay,
        public mixed $Cov_criteria_bitmask,
        public float $Cov_criteria_referenced_property_increment,
    ) {
    }
}