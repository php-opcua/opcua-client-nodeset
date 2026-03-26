<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Enums;

/**
 * OPC UA enumeration type: ProductionMaintenanceModeEnum.
 *
 * @generated
 */
enum ProductionMaintenanceModeEnum: int
{
    case Invalid = 0;
    case Produce = 1;
    case Maintenance = 2;
    case Manual = 3;
}
