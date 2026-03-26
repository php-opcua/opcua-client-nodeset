<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES\Types;

/**
 * DTO for the IRLengthDataType structured data type.
 *
 * @generated
 */
readonly class IRLengthDataType
{
    public function __construct(
        public float $Value,
        public mixed $Unit,
    ) {
    }
}
