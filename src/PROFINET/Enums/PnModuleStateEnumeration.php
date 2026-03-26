<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnModuleStateEnumeration.
 *
 * @generated
 */
enum PnModuleStateEnumeration: int
{
    case NO_MODULE = 0;
    case WRONG_MODULE = 1;
    case PROPER_MODULE = 2;
    case SUBSTITUTE = 3;
    case OK = 4;
}