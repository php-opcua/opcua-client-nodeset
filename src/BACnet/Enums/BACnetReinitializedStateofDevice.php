<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetReinitializedStateofDevice.
 *
 * @generated
 */
enum BACnetReinitializedStateofDevice: int
{
    case Coldstart = 0;
    case Warmstart = 1;
    case Startbackup = 2;
    case Endbackup = 3;
    case Startrestore = 4;
    case Endrestore = 5;
    case Abortrestore = 6;
}