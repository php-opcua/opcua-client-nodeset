<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the Assignment structured data type.
 *
 * @generated
 */
readonly class Assignment
{
    public function __construct(
        public string $Subpackage,
        public ?int $InstallationOrder,
        public array $Targets,
    ) {
    }
}