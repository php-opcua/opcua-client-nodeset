<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Enums;

/**
 * OPC UA enumeration type: DeviceHealthEnumeration.
 *
 * @generated
 */
enum DeviceHealthEnumeration: int
{
    case NORMAL = 0;
    case FAILURE = 1;
    case CHECK_FUNCTION = 2;
    case OFF_SPEC = 3;
    case MAINTENANCE_REQUIRED = 4;
}