<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: OperatingModeEnumeration.
 *
 * @generated
 */
enum OperatingModeEnumeration: int
{
    case Preheat = 0;
    case CoolDown = 1;
    case Process = 2;
    case PowerSaving = 3;
    case Standby = 4;
    case Service = 5;
    case Cleaning = 6;
    case Off = 7;
    case Error = 8;
}
