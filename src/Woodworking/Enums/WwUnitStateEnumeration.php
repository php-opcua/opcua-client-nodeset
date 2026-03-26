<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Woodworking\Enums;

/**
 * OPC UA enumeration type: WwUnitStateEnumeration.
 *
 * @generated
 */
enum WwUnitStateEnumeration: int
{
    case OFFLINE = 0;
    case STANDBY = 1;
    case READY = 2;
    case WORKING = 3;
    case ERROR = 4;
}