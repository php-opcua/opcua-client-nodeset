<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnDeviceStateEnumeration.
 *
 * @generated
 */
enum PnDeviceStateEnumeration: int
{
    case OFFLINE = 0;
    case OFFLINE_DOCKING = 1;
    case ONLINE = 2;
    case ONLINE_DOCKING = 3;
}