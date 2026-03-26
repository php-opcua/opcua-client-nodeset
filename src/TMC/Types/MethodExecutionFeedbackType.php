<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MethodExecutionFeedbackType structured data type.
 *
 * @generated
 */
readonly class MethodExecutionFeedbackType
{
    public function __construct(
        public bool $Success,
        public array $Message,
    ) {
    }
}