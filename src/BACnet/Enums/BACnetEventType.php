<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetEventType.
 *
 * @generated
 */
enum BACnetEventType: int
{
    case change_of_bitstring = 0;
    case change_of_state = 1;
    case change_of_value = 2;
    case command_failure = 3;
    case out_of_range = 5;
    case change_of_life_safety = 8;
    case floating_limit = 4;
    case extended = 9;
    case buffer_ready = 10;
    case unsigned_range = 11;
    case access_event = 13;
    case double_out_of_range = 14;
    case signed_out_of_range = 15;
    case unsigned_out_of_range = 16;
    case change_of_characterstring = 17;
    case change_of_status_flags = 18;
}