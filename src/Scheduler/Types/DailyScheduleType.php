<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the DailyScheduleType structured data type.
 *
 * @generated
 */
readonly class DailyScheduleType
{
    public function __construct(
        public array $DaySchedule,
    ) {
    }
}