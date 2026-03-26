<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the DateRangeType structured data type.
 *
 * @generated
 */
readonly class DateRangeType
{
    public function __construct(
        public mixed $StartDate,
        public mixed $EndDate,
    ) {
    }
}