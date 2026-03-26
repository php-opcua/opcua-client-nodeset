<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: SpecialCookingModeEnumeration.
 *
 * @generated
 */
enum SpecialCookingModeEnumeration: int
{
    case NoSpecialMode = 0;
    case Baking = 1;
    case SousVide = 2;
    case RestStage = 3;
    case Humidification = 4;
    case PerfectHold = 5;
    case InfoStep = 6;
    case Smoking = 7;
    case LowTemp_Cooking = 8;
    case DeltaTSteaming = 9;
}