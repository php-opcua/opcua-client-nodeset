<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Enums;

/**
 * OPC UA enumeration type: MaterialStockStatusEnumeration.
 *
 * @generated
 */
enum MaterialStockStatusEnumeration: int
{
    case Unrestricted = 0;
    case QualityInspection = 1;
    case Blocked = 2;
}