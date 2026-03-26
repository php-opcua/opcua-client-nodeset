<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the LocalCoordinate structured data type.
 *
 * @generated
 */
readonly class LocalCoordinate
{
    public function __construct(
        public float $X,
        public float $Y,
        public float $Z,
        public mixed $Timestamp,
        public float $DilutionOfPrecision,
        public int $UsefulPrecision,
    ) {
    }
}