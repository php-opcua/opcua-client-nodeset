<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IA\Enums;

/**
 * OPC UA enumeration type: SignalModeLight.
 *
 * @generated
 */
enum SignalModeLight: int
{
    case Continuous = 0;
    case Blinking = 1;
    case Flashing = 2;
    case Other = 3;
}