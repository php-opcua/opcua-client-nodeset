<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Types;

/**
 * DTO for the DataRefType structured data type.
 *
 * @generated
 */
readonly class DataRefType
{
    public function __construct(
        public string $DataId,
        public mixed $SemanticInfo,
    ) {
    }
}
