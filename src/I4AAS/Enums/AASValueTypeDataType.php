<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\I4AAS\Enums;

/**
 * OPC UA enumeration type: AASValueTypeDataType.
 *
 * @generated
 */
enum AASValueTypeDataType: int
{
    case Boolean = 0;
    case SByte = 1;
    case Byte = 2;
    case Int16 = 3;
    case UInt16 = 4;
    case Int32 = 5;
    case UInt32 = 6;
    case Int64 = 7;
    case UInt64 = 8;
    case Float = 9;
    case Double = 10;
    case String = 11;
    case DateTime = 12;
    case ByteString = 13;
    case LocalizedText = 14;
    case UtcTime = 15;
}
