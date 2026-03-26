<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetSpecialEventPeriod structured data type.
 *
 * @generated
 */
readonly class BACnetSpecialEventPeriod
{
    public function __construct(
        public mixed $CalendarEntry,
        public mixed $CalendarReference,
    ) {
    }
}