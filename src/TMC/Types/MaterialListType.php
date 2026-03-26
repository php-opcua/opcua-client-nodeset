<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MaterialListType structured data type.
 *
 * @generated
 */
readonly class MaterialListType
{
    public function __construct(
        public string $ID,
        public LocalizedText $Description,
        public array $Items,
    ) {
    }
}