<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: AirnetHealthStateEnum.
 *
 * @generated
 */
enum AirnetHealthStateEnum: int
{
    case OK = 0;
    case Warning = 1;
    case Error = 2;
    case Critical = 3;
}
