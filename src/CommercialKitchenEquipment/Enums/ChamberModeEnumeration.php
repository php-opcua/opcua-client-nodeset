<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: ChamberModeEnumeration.
 *
 * @generated
 */
enum ChamberModeEnumeration: int
{
    case NoSpecialMode = 0;
    case Off = 1;
    case Autostart = 2;
    case Standby = 3;
    case PreHeat = 4;
    case CoolDown = 5;
    case Working = 6;
    case Cleaning = 7;
    case EnergySave = 8;
    case ServiceMode = 9;
    case QuickCool = 10;
    case FlashFreeze = 11;
    case ProofingInterruption = 12;
    case ProofingDelay = 13;
    case Proofing = 14;
    case Setting = 15;
    case Defrost = 16;
    case Baking = 17;
    case Steaming = 18;
}
