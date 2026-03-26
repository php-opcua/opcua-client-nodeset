<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CranesHoists\Enums;

/**
 * OPC UA enumeration type: CraneMotionDeviceCategoryEnum.
 *
 * @generated
 */
enum CraneMotionDeviceCategoryEnum: int
{
    case HOIST = 0;
    case TROLLEY_TRAVERSE = 1;
    case BRIDGE_OR_GANTRY_TRAVEL = 2;
    case LOAD_LIFTING_ATTACHMENT = 3;
    case ROTATING_OR_SLEWING = 4;
    case LUFFING = 5;
    case POWER_SUPPLY_MACHINERY = 6;
    case OTHER = 7;
}