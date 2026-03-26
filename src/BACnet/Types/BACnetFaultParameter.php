<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetFaultParameter structured data type.
 *
 * @generated
 */
readonly class BACnetFaultParameter
{
    public function __construct(
        public mixed $Fault_characterstring,
        public mixed $Fault_life_safety,
        public mixed $Fault_state,
        public mixed $Fault_status_flags,
        public mixed $Fault_extended,
    ) {
    }
}
