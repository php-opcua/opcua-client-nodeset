<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Enums;

/**
 * OPC UA enumeration type: ISA95EquipmentElementLevelEnum.
 *
 * @generated
 */
enum ISA95EquipmentElementLevelEnum: int
{
    case Enterprise = 0;
    case Site = 1;
    case Area = 2;
    case ProcessCell = 3;
    case Unit = 4;
    case ProductionLine = 5;
    case WorkCell = 6;
    case ProductionUnit = 7;
    case StorageZone = 8;
    case StorageUnit = 9;
    case WorkCenter = 10;
    case WorkUnit = 11;
    case EquipmentModule = 12;
    case ControlModule = 13;
    case Other = 14;
}
