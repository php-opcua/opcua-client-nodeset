<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetEventEnumType.
 *
 * @generated
 */
enum BACnetEventEnumType: int
{
    case ChangeOfBitstring = 0;
    case ChangeOfState = 1;
    case ChangeOfValue = 2;
    case CommandFailure = 3;
    case FloatingLimit = 4;
    case OutOfRange = 5;
    case ChangeOfLifeSafety = 8;
    case Extended = 9;
    case BufferReady = 10;
    case UnsignedRange = 11;
}