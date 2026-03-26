<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Enums;

/**
 * OPC UA enumeration type: LocationTypeEnumeration.
 *
 * @generated
 */
enum LocationTypeEnumeration: int
{
    case NMEA = 0;
    case LOCAL = 1;
    case WGS84 = 2;
    case NAME = 3;
}
