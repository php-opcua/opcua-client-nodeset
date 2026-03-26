<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: ControllerModeDataType.
 *
 * @generated
 */
enum ControllerModeDataType: int
{
    case AUTOMATIC = 0;
    case EDIT = 1;
    case MANUAL = 2;
    case MANUAL_DATA_INPUT = 3;
    case SEMI_AUTOMATIC = 4;
}