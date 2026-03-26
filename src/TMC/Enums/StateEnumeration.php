<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Enums;

/**
 * OPC UA enumeration type: StateEnumeration.
 *
 * @generated
 */
enum StateEnumeration: int
{
    case Stopped = 0;
    case Resetting = 1;
    case Idle = 2;
    case Starting = 3;
    case Execute = 4;
    case Completing = 5;
    case Complete = 6;
    case Aborting = 7;
    case Aborted = 8;
    case Stopping = 9;
    case Clearing = 10;
    case Suspending = 11;
    case Suspended = 12;
    case Unsuspending = 13;
    case Holding = 14;
    case Held = 15;
    case Unholding = 16;
}
