<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetDay.
 *
 * @generated
 */
enum BACnetDay: int
{
    case days_numbered_1_7 = 1;
    case days_numbered_8_14 = 2;
    case days_numbered_15_21 = 3;
    case days_numbered_22_28 = 4;
    case days_numbered_29_31 = 5;
    case last_7_days_of_this_month = 6;
    case any_week_of_this_month = 255;
}
