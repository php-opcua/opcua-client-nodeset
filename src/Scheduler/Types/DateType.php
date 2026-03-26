<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the DateType structured data type.
 *
 * @generated
 */
readonly class DateType
{
    public function __construct(
        public int $Year,
        public Enums\Month $Month,
        public Enums\DayOfMonth $DayOfMonth,
        public Enums\DayOfWeek $DayOfWeek,
    ) {
    }
}
