<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the SpecialEventType structured data type.
 *
 * @generated
 */
readonly class SpecialEventType
{
    public function __construct(
        public mixed $Period,
        public array $ListOfTimeActions,
        public int $EventPriority,
    ) {
    }
}