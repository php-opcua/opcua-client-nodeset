<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnDeviceRoleOptionSet.
 *
 * @generated
 */
enum PnDeviceRoleOptionSet: int
{
    case IO_DEVICE = 0;
    case IO_CONTROLLER = 1;
    case IO_MULTIDEVICE = 2;
    case IO_SUPERVISOR = 3;
    case IO_CIM = 4;
}
