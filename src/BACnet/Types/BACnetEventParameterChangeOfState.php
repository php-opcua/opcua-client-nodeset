<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterChangeOfState structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterChangeOfState
{
    public function __construct(
        public int $Time_delay,
        public array $List_of_values,
    ) {
    }
}
