<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: SubstitutionType.
 *
 * @generated
 */
enum SubstitutionType: int
{
    case LastValue = 0;
    case LastValidValue = 1;
    case UpperRange = 2;
    case LowerRange = 3;
}