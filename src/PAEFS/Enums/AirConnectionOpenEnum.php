<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PAEFS\Enums;

/**
 * OPC UA enumeration type: AirConnectionOpenEnum.
 *
 * @generated
 */
enum AirConnectionOpenEnum: int
{
    case Open = 0;
    case Closed = 1;
    case Opening = 2;
    case Closing = 3;
}
