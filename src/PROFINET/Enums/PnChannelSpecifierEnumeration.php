<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnChannelSpecifierEnumeration.
 *
 * @generated
 */
enum PnChannelSpecifierEnumeration: int
{
    case ALL_DISAPPEARS = 0;
    case APPEARS = 2048;
    case DISAPPEARS = 4096;
    case DISAPPEARS_OTHER_REMAIN = 6144;
}