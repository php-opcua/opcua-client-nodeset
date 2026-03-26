<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the CompatibilityRequirement structured data type.
 *
 * @generated
 */
readonly class CompatibilityRequirement
{
    public function __construct(
        public string $Variable,
        public array $Values,
        public Enums\ComparisonOperation $Operation,
    ) {
    }
}
