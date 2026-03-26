<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CranesHoists\Enums;

/**
 * OPC UA enumeration type: ProtectiveFunctionEnum.
 *
 * @generated
 */
enum ProtectiveFunctionEnum: int
{
    case OTHER = 0;
    case FORCE_LIMITER = 1;
    case OVERSPEED_CONTROL = 2;
    case MOTION_LIMITER = 3;
    case ANTICOLLISION = 4;
}
