<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Robotics\Enums;

/**
 * OPC UA enumeration type: AxisMotionProfileEnumeration.
 *
 * @generated
 */
enum AxisMotionProfileEnumeration: int
{
    case OTHER = 0;
    case ROTARY = 1;
    case ROTARY_ENDLESS = 2;
    case LINEAR = 3;
    case LINEAR_ENDLESS = 4;
}
