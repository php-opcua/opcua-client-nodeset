<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MDIS\Enums;

/**
 * OPC UA enumeration type: ArbitrationModeEnum.
 *
 * @generated
 */
enum ArbitrationModeEnum: int
{
    case Average = 1;
    case DefaultA = 2;
    case DefaultB = 4;
    case ForceA = 8;
    case ForceB = 16;
    case High = 32;
    case Low = 64;
}