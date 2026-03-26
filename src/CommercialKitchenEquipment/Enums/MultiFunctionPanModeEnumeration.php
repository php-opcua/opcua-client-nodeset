<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: MultiFunctionPanModeEnumeration.
 *
 * @generated
 */
enum MultiFunctionPanModeEnumeration: int
{
    case Off = 0;
    case On = 1;
    case Preheat = 2;
    case StandBy = 3;
    case PressureCooking = 4;
    case SoftCooking = 5;
    case Cooking = 6;
    case Grilling = 7;
    case Frying = 8;
    case Regenerate = 9;
    case DeltaTcooking = 10;
    case ZoneGrilling = 11;
    case ZoneCooking = 12;
    case Cleaning = 13;
    case PresetStart = 14;
    case Error = 15;
}