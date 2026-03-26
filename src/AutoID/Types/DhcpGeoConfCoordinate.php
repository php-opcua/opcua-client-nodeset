<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the DhcpGeoConfCoordinate structured data type.
 *
 * @generated
 */
readonly class DhcpGeoConfCoordinate
{
    public function __construct(
        public int $LaRes,
        public int $LatitudeInteger,
        public int $LatitudeFraction,
        public int $LoRes,
        public int $LongitudeInteger,
        public int $LongitudeFraction,
        public int $AT,
        public int $AltRes,
        public int $AltitudeInteger,
        public int $AltitudeFraction,
        public int $Datum,
    ) {
    }
}