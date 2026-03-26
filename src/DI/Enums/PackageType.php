<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Enums;

/**
 * OPC UA enumeration type: PackageType.
 *
 * @generated
 */
enum PackageType: int
{
    case Firmware = 0;
    case Application = 1;
    case Configuration = 2;
    case Solution = 3;
}
