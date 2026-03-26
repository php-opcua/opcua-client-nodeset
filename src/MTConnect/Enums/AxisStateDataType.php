<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: AxisStateDataType.
 *
 * @generated
 */
enum AxisStateDataType: int
{
    case HOME = 0;
    case PARKED = 1;
    case STOPPED = 2;
    case TRAVEL = 3;
}