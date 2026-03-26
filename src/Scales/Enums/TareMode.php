<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Enums;

/**
 * OPC UA enumeration type: TareMode.
 *
 * @generated
 */
enum TareMode: int
{
    case None_0 = 0;
    case MeasuredTare_1 = 1;
    case PresetTare_2 = 2;
    case ProportionalTare_3 = 3;
}