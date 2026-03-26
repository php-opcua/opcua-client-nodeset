<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Robotics\Enums;

/**
 * OPC UA enumeration type: OperationalModeEnumeration.
 *
 * @generated
 */
enum OperationalModeEnumeration: int
{
    case OTHER = 0;
    case MANUAL_REDUCED_SPEED = 1;
    case MANUAL_HIGH_SPEED = 2;
    case AUTOMATIC = 3;
    case AUTOMATIC_EXTERNAL = 4;
}
