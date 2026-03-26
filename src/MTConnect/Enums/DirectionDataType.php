<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: DirectionDataType.
 *
 * @generated
 */
enum DirectionDataType: int
{
    case CLOCKWISE = 0;
    case COUNTER_CLOCKWISE = 1;
    case NEGATIVE = 2;
    case POSITIVE = 3;
}
