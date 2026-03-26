<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetDateTime structured data type.
 *
 * @generated
 */
readonly class BACnetDateTime
{
    public function __construct(
        public mixed $Date,
        public mixed $Time,
    ) {
    }
}
