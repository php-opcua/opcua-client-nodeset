<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AMB\Types;

/**
 * DTO for the RootCauseDataType structured data type.
 *
 * @generated
 */
readonly class RootCauseDataType
{
    public function __construct(
        public NodeId $RootCauseId,
        public LocalizedText $RootCause,
    ) {
    }
}
