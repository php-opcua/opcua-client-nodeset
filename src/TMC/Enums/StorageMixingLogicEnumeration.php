<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Enums;

/**
 * OPC UA enumeration type: StorageMixingLogicEnumeration.
 *
 * @generated
 */
enum StorageMixingLogicEnumeration: int
{
    case Mixing = 0;
    case NonMixingByProduct = 1;
    case NonMixingByBatch = 2;
}