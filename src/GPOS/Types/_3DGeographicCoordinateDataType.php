<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS\Types;

/**
 * DTO for the _3DGeographicCoordinateDataType structured data type.
 *
 * @generated
 */
readonly class _3DGeographicCoordinateDataType
{
    public function __construct(
        public float $Longitude,
        public float $Latitude,
        public ?float $Elevation,
    ) {
    }
}
