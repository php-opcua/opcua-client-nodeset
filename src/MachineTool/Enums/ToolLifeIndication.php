<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool\Enums;

/**
 * OPC UA enumeration type: ToolLifeIndication.
 *
 * @generated
 */
enum ToolLifeIndication: int
{
    case Time = 0;
    case NumberOfParts = 1;
    case NumberOfUsages = 2;
    case Feed_Distance = 3;
    case Cutting_Distance = 4;
    case Length = 5;
    case Diameter = 6;
    case Other = 7;
}
