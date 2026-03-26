<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DEXPI\Enums;

/**
 * OPC UA enumeration type: ChamberFunctionClassification.
 *
 * @generated
 */
enum ChamberFunctionClassification: int
{
    case Cooling = 0;
    case Heating = 1;
    case Processing = 2;
    case Tempering = 3;
}
