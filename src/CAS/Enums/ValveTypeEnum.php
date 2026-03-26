<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: ValveTypeEnum.
 *
 * @generated
 */
enum ValveTypeEnum: int
{
    case Other = 0;
    case CheckValve = 1;
    case ContinuousValve = 2;
    case FlowControlValve = 3;
    case PressureValve = 4;
    case SwitchingValve = 5;
}
