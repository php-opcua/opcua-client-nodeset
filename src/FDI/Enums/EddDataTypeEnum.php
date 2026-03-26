<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Enums;

/**
 * OPC UA enumeration type: EddDataTypeEnum.
 *
 * @generated
 */
enum EddDataTypeEnum: int
{
    case BOOLEAN = 1;
    case DOUBLE = 2;
    case FLOAT = 3;
    case INTEGER = 4;
    case UNSIGNED_INTEGER = 5;
    case DATE = 6;
    case DATE_AND_TIME = 7;
    case DURATION = 8;
    case TIME = 9;
    case TIME_VALUE = 10;
    case BIT_ENUMERATED = 11;
    case ENUMERATED = 12;
    case ASCII = 13;
    case BITSTRING = 14;
    case EUC = 15;
    case OCTET = 16;
    case PACKED_ASCII = 17;
    case PASSWORD = 18;
    case VISIBLE = 19;
}