<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetRestartReason.
 *
 * @generated
 */
enum BACnetRestartReason: int
{
    case unknown = 0;
    case coldstart = 1;
    case warmstart = 2;
    case detected_power_lost = 3;
    case detected_powered_off = 4;
    case hardware_watchdog = 5;
    case software_watchdog = 6;
    case suspended = 7;
}