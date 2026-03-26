<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Enums;

/**
 * OPC UA enumeration type: DeviceStatusEnumeration.
 *
 * @generated
 */
enum DeviceStatusEnumeration: int
{
    case Idle = 0;
    case Error = 1;
    case Scanning = 2;
    case Busy = 3;
}
