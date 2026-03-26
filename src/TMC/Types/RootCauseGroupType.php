<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the RootCauseGroupType structured data type.
 *
 * @generated
 */
readonly class RootCauseGroupType
{
    public function __construct(
        public string $ID,
        public string $ParentID,
        public LocalizedText $Description,
    ) {
    }
}