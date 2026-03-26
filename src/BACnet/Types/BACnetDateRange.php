<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetDateRange structured data type.
 *
 * @generated
 */
readonly class BACnetDateRange
{
    public function __construct(
        public mixed $StartDate,
        public mixed $EndTime,
    ) {
    }
}
