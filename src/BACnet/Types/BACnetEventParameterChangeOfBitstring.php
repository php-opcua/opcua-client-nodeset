<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterChangeOfBitstring structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterChangeOfBitstring
{
    public function __construct(
        public int $Time_delay,
        public mixed $Bitmask,
        public array $List_of_bitstring_values,
    ) {
    }
}
