<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: IntegratedStateEnum.
 *
 * @generated
 */
enum IntegratedStateEnum: int
{
    case FullyIntegrated = 0;
    case PartiallyIntegrated = 1;
    case FullyIsolated = 2;
}