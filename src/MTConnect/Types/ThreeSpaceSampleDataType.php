<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Types;

/**
 * DTO for the ThreeSpaceSampleDataType structured data type.
 *
 * @generated
 */
readonly class ThreeSpaceSampleDataType
{
    public function __construct(
        public float $X,
        public float $Y,
        public float $Z,
    ) {
    }
}