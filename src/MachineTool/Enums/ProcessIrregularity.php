<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool\Enums;

/**
 * OPC UA enumeration type: ProcessIrregularity.
 *
 * @generated
 */
enum ProcessIrregularity: int
{
    case CapabilityUnavailable = 0;
    case Detected = 1;
    case NotDetected = 2;
    case NotYetDetermined = 3;
}
