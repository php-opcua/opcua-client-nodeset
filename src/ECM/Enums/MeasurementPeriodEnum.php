<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM\Enums;

/**
 * OPC UA enumeration type: MeasurementPeriodEnum.
 *
 * @generated
 */
enum MeasurementPeriodEnum: int
{
    case SlidingDemand = 0;
    case FixedBlockCompleted = 1;
    case FixedBlockInstantaneous = 2;
    case FixedBlockPredicted = 3;
}