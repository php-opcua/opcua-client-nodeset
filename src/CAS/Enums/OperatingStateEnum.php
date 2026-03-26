<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: OperatingStateEnum.
 *
 * @generated
 */
enum OperatingStateEnum: int
{
    case Other = 0;
    case Stopped = 1;
    case Starting = 2;
    case Stopping = 3;
    case Operational = 4;
}
