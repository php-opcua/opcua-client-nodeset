<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\I4AAS\Enums;

/**
 * OPC UA enumeration type: AASDataTypeIEC61360DataType.
 *
 * @generated
 */
enum AASDataTypeIEC61360DataType: int
{
    case BOOLEAN = 0;
    case DATE = 1;
    case RATIONAL = 2;
    case RATIONAL_MEASURE = 3;
    case REAL_COUNT = 4;
    case REAL_CURRENCY = 5;
    case REAL_MEASURE = 6;
    case STRING = 7;
    case STRING_TRANSLATABLE = 8;
    case TIME = 9;
    case TIME_STAMP = 10;
    case URL = 11;
    case INTEGER = 12;
    case INTEGER_COUNT = 13;
    case INTEGER_CURRENCY = 14;
}
