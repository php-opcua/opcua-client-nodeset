<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: ExecutionDataType.
 *
 * @generated
 */
enum ExecutionDataType: int
{
    case ACTIVE = 0;
    case FEED_HOLD = 1;
    case INTERRUPTED = 2;
    case OPTIONAL_STOP = 3;
    case READY = 4;
    case PROGRAM_COMPLETED = 5;
    case PROGRAM_STOPPED = 6;
    case STOPPED = 7;
}
