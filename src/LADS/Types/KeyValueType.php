<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\LADS\Types;

/**
 * DTO for the KeyValueType structured data type.
 *
 * @generated
 */
readonly class KeyValueType
{
    public function __construct(
        public string $Key,
        public string $Value,
    ) {
    }
}
