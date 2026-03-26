<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CNC\Enums;

/**
 * OPC UA enumeration type: CncChannelStatus.
 *
 * @generated
 */
enum CncChannelStatus: int
{
    case Active = 0;
    case Interrupted = 1;
    case Reset = 2;
}