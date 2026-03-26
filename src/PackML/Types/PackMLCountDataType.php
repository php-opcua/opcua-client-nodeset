<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Types;

/**
 * DTO for the PackMLCountDataType structured data type.
 *
 * @generated
 */
readonly class PackMLCountDataType
{
    public function __construct(
        public int $ID,
        public string $Name,
        public mixed $Unit,
        public int $Count,
        public int $AccCount,
    ) {
    }
}