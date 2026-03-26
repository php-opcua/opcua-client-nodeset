<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CNC\Enums;

/**
 * OPC UA enumeration type: CncSpindleStatus.
 *
 * @generated
 */
enum CncSpindleStatus: int
{
    case Stopped = 0;
    case InTargetArea = 1;
    case Accelerating = 2;
    case Decelerating = 3;
    case Parked = 4;
}