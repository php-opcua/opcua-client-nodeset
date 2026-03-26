<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: MTResetTriggerType.
 *
 * @generated
 */
enum MTResetTriggerType: int
{
    case ACTION_COMPLETE = 0;
    case ANNUAL = 1;
    case DAY = 2;
    case MAINTENANCE = 3;
    case MANUAL = 4;
    case MONTH = 5;
    case POWER_ON = 6;
    case SHIFT = 7;
    case WEEK = 8;
}
