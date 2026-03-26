<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Enums;

/**
 * OPC UA enumeration type: AutoIdOperationStatusEnumeration.
 *
 * @generated
 */
enum AutoIdOperationStatusEnumeration: int
{
    case SUCCESS = 0;
    case MISC_ERROR_TOTAL = 1;
    case MISC_ERROR_PARTIAL = 2;
    case PERMISSON_ERROR = 3;
    case PASSWORD_ERROR = 4;
    case REGION_NOT_FOUND_ERROR = 5;
    case OP_NOT_POSSIBLE_ERROR = 6;
    case OUT_OF_RANGE_ERROR = 7;
    case NO_IDENTIFIER = 8;
    case MULTIPLE_IDENTIFIERS = 9;
    case READ_ERROR = 10;
    case DECODING_ERROR = 11;
    case MATCH_ERROR = 12;
    case CODE_NOT_SUPPORTED = 13;
    case WRITE_ERROR = 14;
    case NOT_SUPPORTED_BY_DEVICE = 15;
    case NOT_SUPPORTED_BY_TAG = 16;
    case DEVICE_NOT_READY = 17;
    case INVALID_CONFIGURATION = 18;
    case RF_COMMUNICATION_ERROR = 19;
    case DEVICE_FAULT = 20;
    case TAG_HAS_LOW_BATTERY = 21;
}
