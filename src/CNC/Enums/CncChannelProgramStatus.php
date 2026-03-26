<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CNC\Enums;

/**
 * OPC UA enumeration type: CncChannelProgramStatus.
 *
 * @generated
 */
enum CncChannelProgramStatus: int
{
    case Stopped = 0;
    case Running = 1;
    case Waiting = 2;
    case Interrupted = 3;
    case Canceled = 4;
}
