<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetNodeType.
 *
 * @generated
 */
enum BACnetNodeType: int
{
    case UNKNOWN = 0;
    case SYSTEM = 1;
    case NETWORK = 2;
    case DEVICE = 3;
    case ORGANIZATIONAL = 4;
    case AREA = 5;
    case EQUIPMENT = 6;
    case POINT = 7;
    case COLLECTION = 8;
    case PROPERTY = 9;
    case FUNCTIONAL = 10;
    case OTHER = 11;
}