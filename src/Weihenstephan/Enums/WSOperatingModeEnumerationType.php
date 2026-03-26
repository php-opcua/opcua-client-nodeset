<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Weihenstephan\Enums;

/**
 * OPC UA enumeration type: WSOperatingModeEnumerationType.
 *
 * @generated
 */
enum WSOperatingModeEnumerationType: int
{
    case Off = 1;
    case Manual = 2;
    case Semi_automatic = 4;
    case Automatic = 8;
}
