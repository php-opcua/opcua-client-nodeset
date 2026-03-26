<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the ParameterResultDataType structured data type.
 *
 * @generated
 */
readonly class ParameterResultDataType
{
    public function __construct(
        public array $NodePath,
        public mixed $StatusCode,
        public mixed $Diagnostics,
    ) {
    }
}
