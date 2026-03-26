<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: IECDatatype.
 *
 * @generated
 */
enum IECDatatype: int
{
    case BOOL = 0;
    case SINT = 1;
    case INT = 2;
    case DINT = 3;
    case LINT = 4;
    case USINT = 5;
    case UINT = 6;
    case UDINT = 7;
    case ULINT = 8;
    case REAL = 9;
    case LREAL = 10;
    case TIME = 11;
    case DATE = 12;
    case TimeOfDay = 13;
    case DateAndTime = 14;
    case STRING = 15;
    case BYTE = 16;
    case WORD = 17;
    case DWORD = 18;
    case LWORD = 19;
    case WSTRING = 20;
}