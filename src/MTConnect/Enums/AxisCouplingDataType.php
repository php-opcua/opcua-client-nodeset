<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: AxisCouplingDataType.
 *
 * @generated
 */
enum AxisCouplingDataType: int
{
    case MASTER = 0;
    case SLAVE = 1;
    case SYNCHRONOUS = 2;
    case TANDEM = 3;
}
