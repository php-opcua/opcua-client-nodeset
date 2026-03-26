<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: ControlModeEnum.
 *
 * @generated
 */
enum ControlModeEnum: int
{
    case ConstantPressureControl = 0;
    case ConstantTemperatureControl = 1;
    case DifferentialPressureControl = 2;
    case ConstantDifferentialPressureControl = 3;
    case VariableDifferentialPressureControl = 4;
    case FlowDependentDifferentialPressureControl = 5;
    case ReturnFlowTemperatureControl = 6;
    case FlowTemperatureControl = 7;
    case FlowRateControl = 8;
    case SpeedControl = 9;
    case Automatic = 10;
    case Uncontrolled = 11;
}
