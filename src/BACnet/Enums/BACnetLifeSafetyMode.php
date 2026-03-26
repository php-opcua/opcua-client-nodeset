<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetLifeSafetyMode.
 *
 * @generated
 */
enum BACnetLifeSafetyMode: int
{
    case Off = 0;
    case On = 1;
    case Test = 2;
    case Manned = 3;
    case UnManned = 4;
    case Armed = 5;
    case Disarmed = 6;
    case Prearmed = 7;
    case Slow = 8;
    case Fast = 9;
    case Disconnected = 10;
    case Enabled = 11;
    case Disabled = 12;
    case AutomaticReleaseDisabled = 13;
    case Default = 14;
}