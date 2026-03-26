<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Weihenstephan\Enums;

/**
 * OPC UA enumeration type: WSProgramEnumerationType.
 *
 * @generated
 */
enum WSProgramEnumerationType: int
{
    case Undefined__No_Program_ = 0;
    case Production = 1;
    case Start_Up = 2;
    case Run_Down = 4;
    case Clean = 8;
    case Changeover = 16;
    case Maintenance = 32;
    case Break = 64;
}
