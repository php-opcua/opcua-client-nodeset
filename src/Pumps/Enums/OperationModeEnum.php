<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: OperationModeEnum.
 *
 * @generated
 */
enum OperationModeEnum: int
{
    case AutoControl = 0;
    case ClosedLoopStandardPID = 1;
    case Advanced = 2;
    case StandBy = 3;
    case OpenLoopMin = 4;
    case OpenLoopValue = 5;
    case OpenLoopMax = 6;
    case ClosedLoopMin = 7;
    case ClosedLoopMax = 8;
    case Test = 9;
    case Calibration = 10;
}