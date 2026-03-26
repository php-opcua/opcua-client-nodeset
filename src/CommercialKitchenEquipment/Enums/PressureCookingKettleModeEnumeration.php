<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: PressureCookingKettleModeEnumeration.
 *
 * @generated
 */
enum PressureCookingKettleModeEnumeration: int
{
    case Off = 0;
    case Preheat = 1;
    case SoftCook = 2;
    case Cook = 3;
    case CookSlow = 4;
    case Pressure = 5;
    case KeepWarming = 6;
    case PresetStart = 7;
    case Error = 8;
}
