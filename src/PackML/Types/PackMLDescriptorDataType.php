<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Types;

/**
 * DTO for the PackMLDescriptorDataType structured data type.
 *
 * @generated
 */
readonly class PackMLDescriptorDataType
{
    public function __construct(
        public int $ID,
        public string $Name,
        public mixed $Unit,
        public float $Value,
    ) {
    }
}
