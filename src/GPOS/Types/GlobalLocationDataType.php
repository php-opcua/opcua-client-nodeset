<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS\Types;

/**
 * DTO for the GlobalLocationDataType structured data type.
 *
 * @generated
 */
readonly class GlobalLocationDataType
{
    public function __construct(
        public mixed $Position,
        public mixed $Orientation,
    ) {
    }
}
