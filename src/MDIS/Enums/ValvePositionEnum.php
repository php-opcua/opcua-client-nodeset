<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MDIS\Enums;

/**
 * OPC UA enumeration type: ValvePositionEnum.
 *
 * @generated
 */
enum ValvePositionEnum: int
{
    case Closed = 1;
    case Open = 2;
    case Moving = 4;
    case Unknown = 8;
}
