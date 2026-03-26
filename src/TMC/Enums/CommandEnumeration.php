<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Enums;

/**
 * OPC UA enumeration type: CommandEnumeration.
 *
 * @generated
 */
enum CommandEnumeration: int
{
    case Abort = 0;
    case Start = 1;
    case Stop = 2;
    case Reset = 3;
    case Hold = 4;
    case Unhold = 5;
    case Clear = 6;
    case Suspend = 7;
    case Unsuspend = 8;
}