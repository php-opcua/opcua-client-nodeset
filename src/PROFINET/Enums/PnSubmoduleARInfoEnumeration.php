<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnSubmoduleARInfoEnumeration.
 *
 * @generated
 */
enum PnSubmoduleARInfoEnumeration: int
{
    case OWN = 0;
    case APPLICATION_READY_PENDING = 128;
    case SUPERORDINATED_LOCKED = 256;
    case LOCKED_BY_IO_CONTROLLER = 384;
    case LOCKED_BY_IO_SUPERVISOR = 512;
}