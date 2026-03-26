<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnSubmoduleIdentInfoEnumeration.
 *
 * @generated
 */
enum PnSubmoduleIdentInfoEnumeration: int
{
    case OK = 0;
    case SUBSTITUTE = 2048;
    case WRONG = 4096;
    case NO_SUBMODULE = 6144;
}