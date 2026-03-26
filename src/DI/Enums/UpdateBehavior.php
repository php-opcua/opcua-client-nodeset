<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Enums;

/**
 * OPC UA enumeration type: UpdateBehavior.
 *
 * @generated
 */
enum UpdateBehavior: int
{
    case KeepsParameters = 0;
    case WillDisconnect = 1;
    case RequiresPowerCycle = 2;
    case WillReboot = 3;
    case NeedsPreparation = 4;
}