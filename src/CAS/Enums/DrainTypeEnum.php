<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: DrainTypeEnum.
 *
 * @generated
 */
enum DrainTypeEnum: int
{
    case Other = 0;
    case CapacitiveDrain = 1;
    case LevelControlledDrain = 2;
    case TimedDrain = 3;
}
