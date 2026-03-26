<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: StatusEnumeration.
 *
 * @generated
 */
enum StatusEnumeration: int
{
    case INIT = 0;
    case WATER_PURGE = 1;
    case PRE_CHILL = 2;
    case FREEZE = 3;
    case HARVEST = 4;
    case BIN_FULL = 5;
    case CLEAN = 6;
    case OFF = 7;
    case SLEEP_MODE = 8;
    case STANDBY = 9;
    case SAFE_MODE = 10;
    case WATER_OUTAGE = 11;
    case HPCO_DELAY_ACTIVE = 12;
    case CURTAIN_OPEN = 13;
    case PRODUCTION_TEST = 14;
    case SAFE_MODE_PRECHILL = 15;
    case SAFE_MODE_FREEZE = 16;
    case SAFE_MODE_HARVEST = 17;
    case SAFE_MODE_FULL_BIN = 18;
}
