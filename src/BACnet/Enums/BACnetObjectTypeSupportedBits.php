<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetObjectTypeSupportedBits.
 *
 * @generated
 */
enum BACnetObjectTypeSupportedBits: int
{
    case analog_input = 0;
    case analog_output = 1;
    case analog_value = 2;
    case binary_input = 3;
    case binary_output = 4;
    case binary_value = 5;
    case calendar = 6;
    case command = 7;
    case device = 8;
    case event_enrollment = 9;
    case file = 10;
    case group = 11;
    case loop = 12;
    case multi_state_input = 13;
    case multi_state_output = 14;
    case notification_class = 15;
    case program = 16;
    case schedule = 17;
    case averaging = 18;
    case multi_state_value = 19;
    case trend_log = 20;
    case life_safety_point = 21;
    case life_safety_zone = 22;
    case accumulator = 23;
    case pulse_converter = 24;
    case event_log = 25;
    case global_group = 26;
    case trend_log_multiple = 27;
    case load_control = 28;
    case structured_view = 29;
    case access_door = 30;
    case UNASSIGNED_31 = 31;
    case access_credential = 32;
    case access_point = 33;
    case access_rights = 34;
    case access_user = 35;
    case access_zone = 36;
    case credential_data_input = 37;
    case network_security = 38;
    case bitstring_value = 39;
    case characterstring_value = 40;
    case date_pattern_value = 41;
    case date_value = 42;
    case datetime_pattern_value = 43;
    case datetime_value = 44;
    case integer_value = 45;
    case large_analog_value = 46;
    case octetstring_value = 47;
    case positive_integer_value = 48;
    case time_pattern_value = 49;
    case time_value = 50;
    case notification_forwarder = 51;
    case alert_enrollment = 52;
    case channel = 53;
    case lighting_output = 54;
}