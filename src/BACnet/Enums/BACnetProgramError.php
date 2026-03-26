<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetProgramError.
 *
 * @generated
 */
enum BACnetProgramError: int
{
    case Normal = 0;
    case LoadFailed = 1;
    case Internal = 2;
    case Program = 3;
    case Other = 4;
}
