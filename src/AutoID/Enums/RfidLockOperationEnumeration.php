<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Enums;

/**
 * OPC UA enumeration type: RfidLockOperationEnumeration.
 *
 * @generated
 */
enum RfidLockOperationEnumeration: int
{
    case Lock = 0;
    case Unlock = 1;
    case PermanentLock = 2;
    case PermanentUnlock = 3;
}