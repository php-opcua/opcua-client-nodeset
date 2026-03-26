<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: FryingPanModeEnumeration.
 *
 * @generated
 */
enum FryingPanModeEnumeration: int
{
    case Off = 0;
    case Preheat = 1;
    case SoftCook = 2;
    case Cook = 3;
    case CookSlow = 4;
    case Frying = 5;
    case PressureCooking = 6;
    case KeepWarming = 7;
    case PresetStart = 8;
    case Error = 9;
}