<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: PastaCookerModeEnumeration.
 *
 * @generated
 */
enum PastaCookerModeEnumeration: int
{
    case Off = 0;
    case Preheat = 1;
    case SoftCook = 2;
    case Cook = 3;
    case CookSlow = 4;
    case KeepWarming = 5;
    case PresetStart = 6;
    case Error = 7;
}