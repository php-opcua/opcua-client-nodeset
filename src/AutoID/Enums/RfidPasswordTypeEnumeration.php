<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Enums;

/**
 * OPC UA enumeration type: RfidPasswordTypeEnumeration.
 *
 * @generated
 */
enum RfidPasswordTypeEnumeration: int
{
    case Access = 0;
    case Kill = 1;
    case Read = 2;
    case Write = 3;
}
