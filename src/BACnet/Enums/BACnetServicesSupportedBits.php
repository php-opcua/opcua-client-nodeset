<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetServicesSupportedBits.
 *
 * @generated
 */
enum BACnetServicesSupportedBits: int
{
    case acknowledgeAlarm = 0;
    case confirmedCOVNotification = 1;
    case confirmedEventNotification = 2;
    case getAlarmSummary = 3;
    case getEnrollmentSummary = 4;
    case subscribeCOV = 5;
    case atomicReadFile = 6;
    case atomicWriteFile = 7;
    case addListElement = 8;
    case removeListElement = 9;
    case createObject = 10;
    case deleteObject = 11;
    case readProperty = 12;
    case UNASSIGNED_13 = 13;
    case readPropertyMultiple = 14;
    case writeProperty = 15;
    case writePropertyMultiple = 16;
    case deviceCommunicationControl = 17;
    case confirmedPrivateTransfer = 18;
    case reinitializeDevice = 19;
    case vtOpen = 20;
    case vtClose = 21;
    case vtData = 22;
    case UNASSIGNED_24 = 23;
    case UNASSIGNED_25 = 24;
    case i_Am = 25;
    case i_Have = 26;
    case unconfirmedCOVNotification = 27;
    case unconfirmedEventNotification = 28;
    case unconfirmedPrivateTransfer = 29;
    case unconfirmedTextMessage = 30;
    case timeSynchronization = 31;
    case who_Has = 32;
    case who_Is = 33;
    case readRange = 34;
    case utcTimeSynchronization = 35;
    case lifeSafetyOperation = 36;
    case subscribeCOVProperty = 37;
    case getEventInformation = 38;
    case writeGroup = 39;
}
