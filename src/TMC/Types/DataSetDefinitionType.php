<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the DataSetDefinitionType structured data type.
 *
 * @generated
 */
readonly class DataSetDefinitionType
{
    public function __construct(
        public string $ID,
        public LocalizedText $Description,
        public array $Definitions,
    ) {
    }
}
