<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetPriorityValue structured data type.
 *
 * @generated
 */
readonly class BACnetPriorityValue
{
    public function __construct(
        public float $Real,
        public int $Enumerated,
        public mixed $Unsigned,
        public bool $Boolean,
        public mixed $Signed,
        public float $Double,
    ) {
    }
}