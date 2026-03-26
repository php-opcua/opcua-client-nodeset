<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: PumpKickModeEnum.
 *
 * @generated
 */
enum PumpKickModeEnum: int
{
    case ManufacturerSpecific = 0;
    case Disabled = 1;
    case OperatorSpecific = 2;
}