<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM\Types;

/**
 * DTO for the AcPeDataType structured data type.
 *
 * @generated
 */
readonly class AcPeDataType
{
    public function __construct(
        public float $A,
        public float $B,
        public float $C,
    ) {
    }
}
