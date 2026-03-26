<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Enums;

/**
 * OPC UA enumeration type: PowerlinkAttribute.
 *
 * @generated
 */
enum PowerlinkAttribute: int
{
    case Const = 0;
    case Read = 1;
    case Write = 2;
    case Input = 3;
    case Output = 4;
    case Store = 5;
    case ValidOnReset = 6;
    case DefaultMapping = 7;
    case RPDO = 8;
    case TPDO = 9;
}