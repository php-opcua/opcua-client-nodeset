<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnPortStateEnumeration.
 *
 * @generated
 */
enum PnPortStateEnumeration: int
{
    case UNKNOWN = 0;
    case DISABLED_DISCARDING = 1;
    case BLOCKING = 2;
    case LISTENING = 3;
    case LEARNING = 4;
    case FORWARDING = 5;
    case BROKEN = 6;
}
