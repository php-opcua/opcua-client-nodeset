<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Types;

/**
 * DTO for the CallLocalMethodActionType structured data type.
 *
 * @generated
 */
readonly class CallLocalMethodActionType
{
    public function __construct(
        public NodeId $ObjectId,
        public NodeId $MethodId,
        public array $InputValues,
        public array $LastOutputValues,
    ) {
    }
}
