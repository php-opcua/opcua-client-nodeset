<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ADI\Enums;

/**
 * OPC UA enumeration type: ExecutionCycleEnumeration.
 *
 * @generated
 */
enum ExecutionCycleEnumeration: int
{
    case IDLE = 0;
    case DIAGNOSTIC = 1;
    case CLEANING = 2;
    case CALIBRATION = 4;
    case VALIDATION = 8;
    case SAMPLING = 16;
    case DIAGNOSTIC_WITH_GRAB_SAMPLE = 32769;
    case CLEANING_WITH_GRAB_SAMPLE = 32770;
    case CALIBRATION_WITH_GRAB_SAMPLE = 32772;
    case VALIDATION_WITH_GRAB_SAMPLE = 32776;
    case SAMPLING_WITH_GRAB_SAMPLE = 32784;
}
