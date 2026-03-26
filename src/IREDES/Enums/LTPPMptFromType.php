<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES\Enums;

/**
 * OPC UA enumeration type: LTPPMptFromType.
 *
 * @generated
 */
enum LTPPMptFromType: int
{
    case LoadPt = 0;
    case DumpPt = 1;
    case Parking = 2;
    case Workshop = 3;
    case Others = 4;
}