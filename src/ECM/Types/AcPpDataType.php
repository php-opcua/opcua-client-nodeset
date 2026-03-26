<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM\Types;

/**
 * DTO for the AcPpDataType structured data type.
 *
 * @generated
 */
readonly class AcPpDataType
{
    public function __construct(
        public float $L1L2,
        public float $L2L3,
        public float $L3L1,
    ) {
    }
}