<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM\Types;

/**
 * DTO for the AcPpDataType structured data type.
 *
 * @generated
 */
readonly class AcPpDataType
{
    public function __construct(
        public float $A_b,
        public float $B_c,
        public float $C_a,
    ) {
    }
}
