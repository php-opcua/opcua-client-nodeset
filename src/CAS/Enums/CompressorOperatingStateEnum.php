<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: CompressorOperatingStateEnum.
 *
 * @generated
 */
enum CompressorOperatingStateEnum: int
{
    case Other = 0;
    case Stopped = 1;
    case Starting = 2;
    case Stopping = 3;
    case Unloaded = 4;
    case Loading = 5;
    case Unloading = 6;
    case Loaded = 7;
}
