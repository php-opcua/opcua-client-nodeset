<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Enums;

/**
 * OPC UA enumeration type: RfidLockRegionEnumeration.
 *
 * @generated
 */
enum RfidLockRegionEnumeration: int
{
    case Kill = 0;
    case Access = 1;
    case EPC = 2;
    case TID = 3;
    case User = 4;
}
