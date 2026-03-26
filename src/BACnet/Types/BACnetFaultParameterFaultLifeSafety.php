<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetFaultParameterFaultLifeSafety structured data type.
 *
 * @generated
 */
readonly class BACnetFaultParameterFaultLifeSafety
{
    public function __construct(
        public array $List_of_fault_values,
        public mixed $Mode_property_reference,
    ) {
    }
}