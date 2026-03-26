<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CNC\Enums;

/**
 * OPC UA enumeration type: CncAxisStatus.
 *
 * @generated
 */
enum CncAxisStatus: int
{
    case InPosition = 0;
    case Moving = 1;
    case Parked = 2;
}