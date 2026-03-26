<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CranesHoists\Enums;

/**
 * OPC UA enumeration type: CraneOperationalModeEnum.
 *
 * @generated
 */
enum CraneOperationalModeEnum: int
{
    case OTHER = 0;
    case MANUAL = 1;
    case SEMIAUTOMATIC = 2;
    case FULLAUTOMATIC = 3;
    case BYPASS_ON = 4;
    case MAINTENANCE = 5;
}