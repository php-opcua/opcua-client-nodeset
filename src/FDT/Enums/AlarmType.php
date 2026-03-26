<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: AlarmType.
 *
 * @generated
 */
enum AlarmType: int
{
    case HighHighAlarm = 0;
    case HighAlarm = 1;
    case LowLowAlarm = 2;
    case LowAlarm = 3;
}