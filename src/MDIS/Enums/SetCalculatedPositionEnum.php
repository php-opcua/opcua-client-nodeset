<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MDIS\Enums;

/**
 * OPC UA enumeration type: SetCalculatedPositionEnum.
 *
 * @generated
 */
enum SetCalculatedPositionEnum: int
{
    case Initial = 0;
    case Inprogress = 1;
    case Complete = 2;
    case Fault = 4;
}