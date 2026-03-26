<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: StateOfTheItemEnum.
 *
 * @generated
 */
enum StateOfTheItemEnum: int
{
    case IdleState = 0;
    case StandByState = 1;
    case OperatingState = 2;
    case ExternalDisabledState = 3;
    case DownState = 4;
}