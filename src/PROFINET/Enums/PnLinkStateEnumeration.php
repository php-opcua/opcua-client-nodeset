<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnLinkStateEnumeration.
 *
 * @generated
 */
enum PnLinkStateEnumeration: int
{
    case UP = 1;
    case DOWN = 2;
    case TESTING = 3;
    case UNKNOWN = 4;
    case DORMANT = 5;
    case NOT_PRESENT = 6;
    case LOWER_LAYER_DOWN = 7;
}