<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Safety\Enums;

/**
 * OPC UA enumeration type: InFlagsType.
 *
 * @generated
 */
enum InFlagsType: int
{
    case CommunicationError = 0;
    case OperatorAckRequested = 1;
    case FSV_Activated = 2;
}