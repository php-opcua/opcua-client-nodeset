<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Enums;

/**
 * OPC UA enumeration type: ProductionStatusEnumeration.
 *
 * @generated
 */
enum ProductionStatusEnumeration: int
{
    case Other = 0;
    case BrandChange = 1;
    case Production = 2;
    case NoProduction = 3;
}
