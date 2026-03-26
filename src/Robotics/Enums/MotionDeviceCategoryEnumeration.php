<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Robotics\Enums;

/**
 * OPC UA enumeration type: MotionDeviceCategoryEnumeration.
 *
 * @generated
 */
enum MotionDeviceCategoryEnumeration: int
{
    case OTHER = 0;
    case ARTICULATED_ROBOT = 1;
    case SCARA_ROBOT = 2;
    case CARTESIAN_ROBOT = 3;
    case SPHERICAL_ROBOT = 4;
    case PARALLEL_ROBOT = 5;
    case CYLINDRICAL_ROBOT = 6;
}
