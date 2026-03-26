<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: TrayModeEnumeration.
 *
 * @generated
 */
enum TrayModeEnumeration: int
{
    case Off = 0;
    case PreHeat = 1;
    case PreCool = 2;
    case HoldWarm = 3;
    case HoldCool = 4;
    case Regenerating = 5;
}