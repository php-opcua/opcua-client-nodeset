<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: CombiSteamerModeEnumeration.
 *
 * @generated
 */
enum CombiSteamerModeEnumeration: int
{
    case Off = 0;
    case On = 1;
    case Preheat = 2;
    case StandBy = 3;
    case Steaming = 4;
    case CombiSteaming = 5;
    case HotAir = 6;
    case Perfection = 7;
    case Cleaning = 8;
    case PresetStart = 9;
    case Error = 10;
}