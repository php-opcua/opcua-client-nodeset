<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM\Types;

/**
 * DTO for the AcPeDataType structured data type.
 *
 * @generated
 */
readonly class AcPeDataType
{
    public function __construct(
        public float $L1,
        public float $L2,
        public float $L3,
    ) {
    }
}