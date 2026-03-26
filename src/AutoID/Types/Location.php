<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the Location structured data type.
 *
 * @generated
 */
readonly class Location
{
    public function __construct(
        public mixed $NMEA,
        public mixed $Local,
        public mixed $WGS84,
        public mixed $Name,
    ) {
    }
}