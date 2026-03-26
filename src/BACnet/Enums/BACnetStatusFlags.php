<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetStatusFlags.
 *
 * @generated
 */
enum BACnetStatusFlags: int
{
    case InAlarm = 0;
    case Fault = 1;
    case Overriden = 2;
    case OutOfService = 3;
}
