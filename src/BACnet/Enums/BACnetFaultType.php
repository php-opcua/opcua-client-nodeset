<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetFaultType.
 *
 * @generated
 */
enum BACnetFaultType: int
{
    case none = 0;
    case fault_characterstring = 1;
    case fault_exended = 2;
    case fault_life_safety = 3;
    case fault_state = 4;
    case fault_status_flags = 5;
}
