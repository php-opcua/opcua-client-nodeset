<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool\Enums;

/**
 * OPC UA enumeration type: ChannelMode.
 *
 * @generated
 */
enum ChannelMode: int
{
    case Automatic = 0;
    case MdaMdi = 1;
    case JogManual = 2;
    case JogIncrement = 3;
    case TeachingHandle = 4;
    case Remote = 5;
    case Reference = 6;
    case Other = 7;
}
