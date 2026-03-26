<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Enums;

/**
 * OPC UA enumeration type: PowerlinkNMTResetCmdEnumeration.
 *
 * @generated
 */
enum PowerlinkNMTResetCmdEnumeration: int
{
    case NMTResetNode = 40;
    case NMTResetCommunication = 41;
    case NMTResetConfiguration = 42;
    case NMTSwReset = 43;
    case NMTInvalidService = 255;
}
