<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the AccessResult structured data type.
 *
 * @generated
 */
readonly class AccessResult
{
    public function __construct(
        public mixed $CodeType,
        public mixed $Identifier,
        public mixed $Timestamp,
    ) {
    }
}