<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool\Enums;

/**
 * OPC UA enumeration type: ToolLocked.
 *
 * @generated
 */
enum ToolLocked: int
{
    case CapabilityUnavailable = 0;
    case ByOperator = 1;
    case ToolBreak = 2;
    case ToolLife = 3;
    case MeasurementError = 4;
    case Other = 5;
}
