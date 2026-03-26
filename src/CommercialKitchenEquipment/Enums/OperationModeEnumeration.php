<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: OperationModeEnumeration.
 *
 * @generated
 */
enum OperationModeEnumeration: int
{
    case Init = 0;
    case MachineOff = 1;
    case Filling = 2;
    case FillingHeating = 3;
    case Heating = 4;
    case EnableOperation = 5;
    case ReadyForOperation = 6;
    case Operation = 7;
    case Cycle_pause = 8;
    case NotDefined1 = 9;
    case SelfCleaning = 10;
    case NotDefined2 = 11;
    case RemoteControl = 12;
    case ControllingOutputs = 13;
    case NotDefined3 = 14;
    case Error = 15;
}