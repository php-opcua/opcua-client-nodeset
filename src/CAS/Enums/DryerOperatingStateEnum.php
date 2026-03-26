<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: DryerOperatingStateEnum.
 *
 * @generated
 */
enum DryerOperatingStateEnum: int
{
    case Other = 0;
    case Stopped = 1;
    case Running = 2;
    case RefrigerantCompressorStopped = 3;
    case RefrigerantCompressorRunning = 4;
    case PurgeValveClosed = 5;
    case PurgeValveOpen = 6;
    case ParallelModeOfBothVessels = 7;
    case Depressurizing = 8;
    case Desorbing = 9;
    case Cooling = 10;
    case Pressurizing = 11;
    case RegeneratedVesselInStand_by = 12;
}
