<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Enums;

/**
 * OPC UA enumeration type: MaterialValidationStatusEnumeration.
 *
 * @generated
 */
enum MaterialValidationStatusEnumeration: int
{
    case None = 0;
    case Waiting = 1;
    case Passed = 2;
    case Failed = 3;
}