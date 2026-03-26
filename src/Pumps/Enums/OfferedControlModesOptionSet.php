<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: OfferedControlModesOptionSet.
 *
 * @generated
 */
enum OfferedControlModesOptionSet: int
{
    case Constant_pressure_control = 0;
    case Constant_temperature_control = 1;
    case Differential_pressure_control = 2;
    case Constant_differential_pressure_control = 3;
    case Variable_differential_pressure_control = 4;
    case Flow_dependent_differential_pressure_control = 5;
    case Return_flow_temperature_control = 6;
    case Flow_temperature_control = 7;
    case Flow_rate_control = 8;
    case Automatic = 9;
    case Uncontrolled = 10;
    case Speed_control = 11;
}