<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DEXPI\Enums;

/**
 * OPC UA enumeration type: PortStatusClassification.
 *
 * @generated
 */
enum PortStatusClassification: int
{
    case StatusHighHighHighPort = 0;
    case StatusHighHighPort = 1;
    case StatusHighPort = 2;
    case StatusLowLowLowPort = 3;
    case StatusLowLowPort = 4;
    case StatusLowPort = 5;
}