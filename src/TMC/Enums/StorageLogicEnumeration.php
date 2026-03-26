<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Enums;

/**
 * OPC UA enumeration type: StorageLogicEnumeration.
 *
 * @generated
 */
enum StorageLogicEnumeration: int
{
    case Other = 0;
    case FIFO = 1;
    case LIFO = 2;
    case FEFO = 3;
}