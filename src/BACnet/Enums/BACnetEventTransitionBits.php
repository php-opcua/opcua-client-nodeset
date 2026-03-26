<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetEventTransitionBits.
 *
 * @generated
 */
enum BACnetEventTransitionBits: int
{
    case to_offnormal = 0;
    case to_fault = 1;
    case to_normal = 2;
}