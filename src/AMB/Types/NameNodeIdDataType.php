<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AMB\Types;

/**
 * DTO for the NameNodeIdDataType structured data type.
 *
 * @generated
 */
readonly class NameNodeIdDataType
{
    public function __construct(
        public LocalizedText $Name,
        public NodeId $NodeId,
    ) {
    }
}
