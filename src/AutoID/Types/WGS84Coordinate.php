<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the WGS84Coordinate structured data type.
 *
 * @generated
 */
readonly class WGS84Coordinate
{
    public function __construct(
        public string $N_S_Hemisphere,
        public float $Latitude,
        public string $E_W_Hemisphere,
        public float $Longitude,
        public float $Altitude,
        public mixed $Timestamp,
        public float $DilutionOfPrecision,
        public int $UsefulPrecisionLatLon,
        public int $UsefulPrecisionAlt,
    ) {
    }
}