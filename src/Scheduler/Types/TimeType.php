<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the TimeType structured data type.
 *
 * @generated
 */
readonly class TimeType
{
    public function __construct(
        public int $Hour,
        public int $Minute,
        public int $Second,
    ) {
    }
}
