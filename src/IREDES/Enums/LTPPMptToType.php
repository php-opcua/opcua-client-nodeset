<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES\Enums;

/**
 * OPC UA enumeration type: LTPPMptToType.
 *
 * @generated
 */
enum LTPPMptToType: int
{
    case LoadPt = 0;
    case DumpPt = 1;
    case Parking = 2;
    case Boulder = 3;
    case Workshop = 4;
    case Others = 5;
}