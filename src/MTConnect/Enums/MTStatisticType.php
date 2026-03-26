<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: MTStatisticType.
 *
 * @generated
 */
enum MTStatisticType: int
{
    case AVERAGE = 0;
    case MAXIMUM = 1;
    case MEDIAN = 2;
    case MINIMUM = 3;
    case MODE = 4;
    case RANGE = 5;
    case ROOT_MEAN_SQUARE = 6;
    case STANDARD_DEVIATION = 7;
}
