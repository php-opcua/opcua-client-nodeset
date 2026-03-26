<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool\Enums;

/**
 * OPC UA enumeration type: LaserState.
 *
 * @generated
 */
enum LaserState: int
{
    case Undefined = 0;
    case Ready = 1;
    case Active = 2;
    case Error = 3;
}