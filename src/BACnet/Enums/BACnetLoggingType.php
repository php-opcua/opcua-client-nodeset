<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetLoggingType.
 *
 * @generated
 */
enum BACnetLoggingType: int
{
    case Polled = 0;
    case COV = 1;
    case Triggered = 2;
}
