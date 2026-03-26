<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ADI\Enums;

/**
 * OPC UA enumeration type: AlarmStateEnumeration.
 *
 * @generated
 */
enum AlarmStateEnumeration: int
{
    case NORMAL_0 = 0;
    case WARNING_LOW_1 = 1;
    case WARNING_HIGH_2 = 2;
    case WARNING_4 = 4;
    case ALARM_LOW_8 = 8;
    case ALARM_HIGH_16 = 16;
    case ALARM_32 = 32;
}
