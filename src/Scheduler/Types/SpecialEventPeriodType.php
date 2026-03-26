<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the SpecialEventPeriodType structured data type.
 *
 * @generated
 */
readonly class SpecialEventPeriodType
{
    public function __construct(
        public mixed $CalendarEntry,
        public NodeId $CalendarReference,
    ) {
    }
}
