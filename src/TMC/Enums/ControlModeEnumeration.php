<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Enums;

/**
 * OPC UA enumeration type: ControlModeEnumeration.
 *
 * @generated
 */
enum ControlModeEnumeration: int
{
    case OTHER = 0;
    case PRODUCTION = 1;
    case MAINTENANCE = 2;
    case MANUAL = 3;
    case CHANGE_OVER = 4;
    case CLEAN = 5;
    case SET_UP = 6;
    case EMPTY_OUT = 7;
    case REMOTE_SERVICE = 8;
}
