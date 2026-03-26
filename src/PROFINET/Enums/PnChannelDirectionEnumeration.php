<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnChannelDirectionEnumeration.
 *
 * @generated
 */
enum PnChannelDirectionEnumeration: int
{
    case MANUFACTURER_SPECIFIC = 0;
    case INPUT_CHANNEL = 8192;
    case OUTPUT_CHANNEL = 16384;
    case BIDIRECTIONAL_CHANNEL = 24576;
}
