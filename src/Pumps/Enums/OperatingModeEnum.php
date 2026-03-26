<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: OperatingModeEnum.
 *
 * @generated
 */
enum OperatingModeEnum: int
{
    case SingleOperation = 0;
    case SeriesOperation = 1;
    case ParallelOperation = 2;
}