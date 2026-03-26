<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool\Enums;

/**
 * OPC UA enumeration type: EDMGeneratorState.
 *
 * @generated
 */
enum EDMGeneratorState: int
{
    case Undefined = 0;
    case Ready = 1;
    case Active_Low_Voltage = 2;
    case Active_High_Voltage = 3;
    case Error = 4;
}
