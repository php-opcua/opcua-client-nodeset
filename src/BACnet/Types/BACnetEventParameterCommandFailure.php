<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterCommandFailure structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterCommandFailure
{
    public function __construct(
        public int $Time_delay,
        public mixed $Feedback_property_reference,
    ) {
    }
}