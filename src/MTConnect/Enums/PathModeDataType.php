<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Enums;

/**
 * OPC UA enumeration type: PathModeDataType.
 *
 * @generated
 */
enum PathModeDataType: int
{
    case INDEPENDENT = 0;
    case MASTER = 1;
    case MIRROR = 2;
    case SYNCHRONOUS = 3;
}