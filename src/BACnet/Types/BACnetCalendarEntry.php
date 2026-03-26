<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetCalendarEntry structured data type.
 *
 * @generated
 */
readonly class BACnetCalendarEntry
{
    public function __construct(
        public mixed $Date,
        public mixed $DateRange,
        public mixed $WeekNDay,
    ) {
    }
}