<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetFaultParameterFaultState structured data type.
 *
 * @generated
 */
readonly class BACnetFaultParameterFaultState
{
    public function __construct(
        public array $List_of_fault_values,
    ) {
    }
}
