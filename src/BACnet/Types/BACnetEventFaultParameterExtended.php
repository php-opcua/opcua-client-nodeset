<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventFaultParameterExtended structured data type.
 *
 * @generated
 */
readonly class BACnetEventFaultParameterExtended
{
    public function __construct(
        public int $VendorId,
        public mixed $Extended_fault_type,
        public array $Parameters,
    ) {
    }
}
