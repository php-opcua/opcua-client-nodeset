<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Types;

/**
 * DTO for the TransferIncident structured data type.
 *
 * @generated
 */
readonly class TransferIncident
{
    public function __construct(
        public NodeId $ContextNodeId,
        public mixed $StatusCode,
        public mixed $Diagnostics,
    ) {
    }
}
