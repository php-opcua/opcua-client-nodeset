<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: FunctionalModeDataType.
 *
 * @generated
 */
enum FunctionalModeDataType: int
{
    case MAINTENANCE = 0;
    case PRODUCTION = 1;
    case PROCESS_DEVELOPMENT = 2;
    case SETUP = 3;
    case TEARDOWN = 4;
}