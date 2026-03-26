<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetLifeSafetyOperation.
 *
 * @generated
 */
enum BACnetLifeSafetyOperation: int
{
    case None = 0;
    case Silence = 1;
    case SilenceAudible = 2;
    case SilenceVisible = 3;
    case Reset = 4;
    case ResetAlarm = 5;
    case ResetFault = 6;
    case Unsilence = 7;
    case UnsilenceAudible = 8;
    case UnsilenceVisible = 9;
}