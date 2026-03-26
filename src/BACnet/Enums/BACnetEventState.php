<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetEventState.
 *
 * @generated
 */
enum BACnetEventState: int
{
    case Normal = 0;
    case Fault = 1;
    case OffNormal = 2;
    case HighLimit = 3;
    case LowLimit = 4;
    case LifeSafetyAlarm = 5;
}