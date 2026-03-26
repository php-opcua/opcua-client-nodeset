<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ADI\Enums;

/**
 * OPC UA enumeration type: AcquisitionResultStatusEnumeration.
 *
 * @generated
 */
enum AcquisitionResultStatusEnumeration: int
{
    case NOT_USED = 0;
    case GOOD = 1;
    case BAD = 2;
    case UNKNOWN = 3;
    case PARTIAL = 4;
}
