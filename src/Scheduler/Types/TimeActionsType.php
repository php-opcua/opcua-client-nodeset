<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the TimeActionsType structured data type.
 *
 * @generated
 */
readonly class TimeActionsType
{
    public function __construct(
        public mixed $Time,
        public array $Actions,
    ) {
    }
}
