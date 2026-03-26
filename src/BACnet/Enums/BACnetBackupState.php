<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetBackupState.
 *
 * @generated
 */
enum BACnetBackupState: int
{
    case Idle = 0;
    case Preparing_For_Backup = 1;
    case Preparing_For_Restore = 2;
    case Performing_A_Backup = 3;
    case Performing_A_Restore = 4;
    case Backup_Failure = 5;
    case Restore_Failure = 6;
}
