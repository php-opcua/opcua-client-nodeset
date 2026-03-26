<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetFaultParameterFaultStatusFlags structured data type.
 *
 * @generated
 */
readonly class BACnetFaultParameterFaultStatusFlags
{
    public function __construct(
        public array $Status_flags_reference,
    ) {
    }
}