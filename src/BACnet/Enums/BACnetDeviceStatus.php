<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetDeviceStatus.
 *
 * @generated
 */
enum BACnetDeviceStatus: int
{
    case Operational = 0;
    case OperationalReadOnly = 1;
    case DownloadRequired = 2;
    case DownloadInProgress = 3;
    case NonOperational = 4;
    case BackupInProgress = 5;
}