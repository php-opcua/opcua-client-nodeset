<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DEXPI\Enums;

/**
 * OPC UA enumeration type: SignalConveyingTypeClassification.
 *
 * @generated
 */
enum SignalConveyingTypeClassification: int
{
    case CapillarySignalConveying = 0;
    case ConductedRadiationSignalConveying = 1;
    case ElectricalSignalConveying = 2;
    case HydraulicSignalConveying = 3;
    case PneumaticSignalConveying = 4;
}