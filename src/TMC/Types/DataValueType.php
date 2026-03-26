<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the DataValueType structured data type.
 *
 * @generated
 */
readonly class DataValueType
{
    public function __construct(
        public mixed $Value,
        public mixed $EngineeringUnits,
    ) {
    }
}
