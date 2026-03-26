<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the DataDescriptionType structured data type.
 *
 * @generated
 */
readonly class DataDescriptionType
{
    public function __construct(
        public string $ID,
        public string $MES_ID,
        public LocalizedText $Description,
    ) {
    }
}