<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Types;

/**
 * DTO for the SemanticInfoType structured data type.
 *
 * @generated
 */
readonly class SemanticInfoType
{
    public function __construct(
        public string $ApplicationDomain,
        public string $SemanticId,
    ) {
    }
}