<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: CookingKettleModeEnumeration.
 *
 * @generated
 */
enum CookingKettleModeEnumeration: int
{
    case Off = 0;
    case Preheat = 1;
    case SoftCook = 2;
    case Cook = 3;
    case CookSlow = 4;
    case KeepWarming = 5;
    case Stiring = 6;
    case PresetStart = 7;
    case Error = 8;
}