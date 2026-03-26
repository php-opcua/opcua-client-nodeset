<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: CompressorTypeEnum.
 *
 * @generated
 */
enum CompressorTypeEnum: int
{
    case Other = 0;
    case AxialTurboCompressor = 1;
    case BellowsCompressor = 2;
    case DiaphragmCompressor = 3;
    case LiquidRingCompressor = 4;
    case PistonCompressor = 5;
    case RadialTurboCompressor = 6;
    case RootsCompressor = 7;
    case ScrewCompressor = 8;
    case ScrollCompressor = 9;
    case SideChannelCompressor = 10;
    case StraightLobeCompressor = 11;
    case VaneCompressor = 12;
}