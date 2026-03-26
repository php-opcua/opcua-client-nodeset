<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetProgramStates.
 *
 * @generated
 */
enum BACnetProgramStates: int
{
    case Idle = 0;
    case Loading = 1;
    case Running = 2;
    case Waiting = 3;
    case Halted = 4;
    case Unloading = 5;
}
