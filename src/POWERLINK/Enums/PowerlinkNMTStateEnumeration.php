<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Enums;

/**
 * OPC UA enumeration type: PowerlinkNMTStateEnumeration.
 *
 * @generated
 */
enum PowerlinkNMTStateEnumeration: int
{
    case NMT_GS_OFF_ = 0;
    case NMT_GS_INITIALISING = 25;
    case NMT_GS_RESET_APPLICATION = 41;
    case NMT_GS_RESET_COMMUNICATION = 57;
    case NMT_GS_RESET_CONFIGURATION = 121;
    case NMT_XS_NOT_ACTIVE = 28;
    case NMT_XS_PRE_OPERATIONAL_1 = 29;
    case NMT_XS_PRE_OPERATIONAL_2 = 93;
    case NMT_XS_READY_TO_OPERATE = 109;
    case NMT_XS_OPERATIONAL = 253;
    case NMT_CS_STOPPED = 77;
    case NMT_XS_BASIC_ETHERNET = 30;
}