<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Types;

/**
 * DTO for the ApplyResult structured data type.
 *
 * @generated
 */
readonly class ApplyResult
{
    public function __construct(
        public int $Status,
        public array $TransferIncidents,
    ) {
    }
}