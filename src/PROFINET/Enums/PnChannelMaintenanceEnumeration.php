<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnChannelMaintenanceEnumeration.
 *
 * @generated
 */
enum PnChannelMaintenanceEnumeration: int
{
    case FAULT = 0;
    case MAINTENANCE_REQUIRED = 512;
    case MAINTENANCE_DEMANDED = 1024;
    case USE_QUALIFIED_CHANNEL_QUALIFIER = 1536;
}