<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetReliability.
 *
 * @generated
 */
enum BACnetReliability: int
{
    case NoFaultDetected = 0;
    case NoSensor = 1;
    case OverRange = 2;
    case UnderRange = 3;
    case OpenLoop = 4;
    case ShortedLoop = 5;
    case NoOutput = 6;
    case UnreliableOther = 7;
    case ProcessError = 8;
    case MultiStateFault = 9;
    case ConfigurationError = 10;
    case CommunicationFailure = 12;
    case MemberFault = 13;
    case MONITORED_OBJECT_FAULT = 14;
    case TRIPPED = 15;
}
