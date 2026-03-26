<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: PumpClassEnum.
 *
 * @generated
 */
enum PumpClassEnum: int
{
    case RotodynamicPump = 0;
    case PositiveDisplacementPump = 1;
    case ProcessVacuumPump = 2;
    case TurboVacuumPump = 3;
    case VacuumPump = 4;
    case LiquidPump = 5;
    case Pump = 6;
}