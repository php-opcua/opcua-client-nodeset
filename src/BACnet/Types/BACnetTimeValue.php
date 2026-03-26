<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetTimeValue structured data type.
 *
 * @generated
 */
readonly class BACnetTimeValue
{
    public function __construct(
        public mixed $Time,
        public mixed $Value,
    ) {
    }
}