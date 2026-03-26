<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetDeviceCommunicationEnabled.
 *
 * @generated
 */
enum BACnetDeviceCommunicationEnabled: int
{
    case Enable = 0;
    case Disable = 1;
    case DisableInitiation = 2;
}