<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Types;

/**
 * DTO for the RegisterNodesResult structured data type.
 *
 * @generated
 */
readonly class RegisterNodesResult
{
    public function __construct(
        public int $Status,
        public array $RegisteredNodes,
    ) {
    }
}
