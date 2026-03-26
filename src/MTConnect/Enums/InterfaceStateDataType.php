<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: InterfaceStateDataType.
 *
 * @generated
 */
enum InterfaceStateDataType: int
{
    case ACTIVE = 0;
    case COMPLETE = 1;
    case FAIL = 2;
    case NOT_READY = 4;
    case READY = 5;
}