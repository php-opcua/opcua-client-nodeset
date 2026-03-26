<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool\Enums;

/**
 * OPC UA enumeration type: PartQuality.
 *
 * @generated
 */
enum PartQuality: int
{
    case CapabilityUnavailable = 0;
    case Good = 1;
    case Bad = 2;
    case NotYetMeasured = 3;
    case WillNotBeMeasured = 4;
}
