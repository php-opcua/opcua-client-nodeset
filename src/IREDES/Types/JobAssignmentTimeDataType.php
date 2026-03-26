<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES\Types;

/**
 * DTO for the JobAssignmentTimeDataType structured data type.
 *
 * @generated
 */
readonly class JobAssignmentTimeDataType
{
    public function __construct(
        public \DateTimeImmutable $ExpectedFinishTime,
        public mixed $ExpectedDuration,
    ) {
    }
}
