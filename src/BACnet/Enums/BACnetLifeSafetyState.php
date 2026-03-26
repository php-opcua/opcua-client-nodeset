<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetLifeSafetyState.
 *
 * @generated
 */
enum BACnetLifeSafetyState: int
{
    case Quiet = 0;
    case PreAlarm = 1;
    case Alarm = 2;
    case Fault = 3;
    case FaultPreAlarm = 4;
    case FaultAlarm = 5;
    case NotReady = 6;
    case Active = 7;
    case Tamper = 8;
    case TestAlarm = 9;
    case TestActive = 10;
    case TestFault = 11;
    case TestFaultAlarm = 12;
    case Holdup = 13;
    case Duress = 14;
    case TamperAlarm = 15;
    case Abnormal = 16;
    case EmergencyPower = 17;
    case Delayed = 18;
    case Blocked = 19;
    case LocalAlarm = 20;
    case GeneralAlarm = 21;
    case Supervisory = 22;
    case TestSupervisory = 23;
}
