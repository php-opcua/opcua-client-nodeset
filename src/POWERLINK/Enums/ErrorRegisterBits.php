<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Enums;

/**
 * OPC UA enumeration type: ErrorRegisterBits.
 *
 * @generated
 */
enum ErrorRegisterBits: int
{
    case Generic_error = 0;
    case Current = 1;
    case Voltage = 2;
    case Temperature = 3;
    case Communication_error = 4;
    case Device_profile_specific = 5;
    case Reserved = 6;
    case Manufacturer_specific = 7;
}
