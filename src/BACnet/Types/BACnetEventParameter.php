<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameter structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameter
{
    public function __construct(
        public mixed $Change_of_bitstring,
        public mixed $Change_of_state,
        public mixed $Change_of_value,
        public mixed $Command_failure,
        public mixed $Floating_limit,
        public mixed $Out_of_range,
        public mixed $Extended,
        public mixed $Buffer_ready,
        public mixed $Unsigned_range,
        public mixed $Double_out_of_range,
        public mixed $Signed_out_of_range,
        public mixed $Unsigned_out_of_range,
        public mixed $Change_of_characterstring,
        public mixed $Change_of_life_safety,
    ) {
    }
}
