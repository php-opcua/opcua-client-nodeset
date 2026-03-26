<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the DataSetEntryType structured data type.
 *
 * @generated
 */
readonly class DataSetEntryType
{
    public function __construct(
        public string $ID,
        public mixed $Value,
    ) {
    }
}
