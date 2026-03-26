<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DEXPI\Enums;

/**
 * OPC UA enumeration type: HeatTracingTypeClassification.
 *
 * @generated
 */
enum HeatTracingTypeClassification: int
{
    case ElectricalHeatTracingSystem = 0;
    case HeatTracingSystem = 1;
    case NoHeatTracingSystem = 2;
    case SteamHeatTracingSystem = 3;
    case TubularHeatTracingSystem = 4;
}
