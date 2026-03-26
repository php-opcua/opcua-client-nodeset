<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: MultiPumpOperationModeEnum.
 *
 * @generated
 */
enum MultiPumpOperationModeEnum: int
{
    case Standalone = 0;
    case RedundancyOperation = 1;
    case AdditionOperation = 2;
    case MixedRedundancy = 3;
}
