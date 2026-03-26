<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the WriteLocalVariableActionType structured data type.
 *
 * @generated
 */
readonly class WriteLocalVariableActionType
{
    public function __construct(
        public NodeId $Variable,
        public mixed $Value,
    ) {
    }
}
