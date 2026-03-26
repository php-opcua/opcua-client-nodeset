<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: CompositionStateDataType.
 *
 * @generated
 */
enum CompositionStateDataType: int
{
    case ACTIVE = 0;
    case CLOSED = 1;
    case DOWN = 2;
    case INACTIVE = 3;
    case LEFT = 4;
    case OFF = 5;
    case ON = 6;
    case OPEN = 7;
    case RIGHT = 8;
    case TRANSITIONING = 9;
    case UNLATCHED = 10;
    case UP = 11;
}