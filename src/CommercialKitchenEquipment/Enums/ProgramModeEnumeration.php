<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: ProgramModeEnumeration.
 *
 * @generated
 */
enum ProgramModeEnumeration: int
{
    case OperationOFF = 0;
    case PreWash = 1;
    case Cleaning1 = 2;
    case WashTimeIncreased = 3;
    case Cleaning2 = 4;
    case DrainingPause = 5;
    case Draining = 6;
    case FinalRinse = 7;
    case WaitingTime = 8;
    case HeatRecovery = 9;
}