<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the DataSetType structured data type.
 *
 * @generated
 */
readonly class DataSetType
{
    public function __construct(
        public string $ID,
        public LocalizedText $Description,
        public array $Values,
    ) {
    }
}
