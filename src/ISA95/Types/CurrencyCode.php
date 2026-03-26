<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Types;

/**
 * DTO for the CurrencyCode structured data type.
 *
 * @generated
 */
readonly class CurrencyCode
{
    public function __construct(
        public string $namespaceUri,
        public int $unitId,
        public array $charId,
        public LocalizedText $displayName,
        public LocalizedText $Description,
    ) {
    }
}
