<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES\Enums;

/**
 * OPC UA enumeration type: Answer.
 *
 * @generated
 */
enum Answer: int
{
    case Accepted = 0;
    case Delayed = 1;
    case AcceptedWithCondition = 2;
    case Denied = 3;
}