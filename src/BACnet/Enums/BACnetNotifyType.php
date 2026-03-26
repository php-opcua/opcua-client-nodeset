<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetNotifyType.
 *
 * @generated
 */
enum BACnetNotifyType: int
{
    case Alarm = 0;
    case Event = 1;
    case AckNotification = 2;
}