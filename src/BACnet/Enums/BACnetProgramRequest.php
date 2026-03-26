<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetProgramRequest.
 *
 * @generated
 */
enum BACnetProgramRequest: int
{
    case Ready = 0;
    case Load = 1;
    case Run = 2;
    case Halt = 3;
    case Restart = 4;
    case Unload = 5;
}