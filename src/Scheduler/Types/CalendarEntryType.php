<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the CalendarEntryType structured data type.
 *
 * @generated
 */
readonly class CalendarEntryType
{
    public function __construct(
        public mixed $Date,
        public mixed $DateRange,
    ) {
    }
}