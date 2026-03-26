<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnARStateEnumeration.
 *
 * @generated
 */
enum PnARStateEnumeration: int
{
    case CONNECTED = 0;
    case UNCONNECTED = 1;
    case UNCONNECTED_ERR_DEVICE_NOT_FOUND = 2;
    case UNCONNECTED_ERR_DUPLICATE_IP = 3;
    case UNCONNECTED_ERR_DUPLICATE_NOS = 4;
}
