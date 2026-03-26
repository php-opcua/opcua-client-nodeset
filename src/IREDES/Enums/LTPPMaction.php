<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES\Enums;

/**
 * OPC UA enumeration type: LTPPMaction.
 *
 * @generated
 */
enum LTPPMaction: int
{
    case Load = 0;
    case Dump = 1;
    case Parking = 2;
    case Workshop = 3;
    case Other = 4;
}