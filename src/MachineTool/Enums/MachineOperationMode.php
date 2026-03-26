<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool\Enums;

/**
 * OPC UA enumeration type: MachineOperationMode.
 *
 * @generated
 */
enum MachineOperationMode: int
{
    case Manual = 0;
    case Automatic = 1;
    case Setup = 2;
    case AutoWithManualIntervention = 3;
    case Service = 4;
    case Other = 5;
}