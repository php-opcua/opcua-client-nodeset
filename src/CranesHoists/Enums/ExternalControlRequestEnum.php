<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CranesHoists\Enums;

/**
 * OPC UA enumeration type: ExternalControlRequestEnum.
 *
 * @generated
 */
enum ExternalControlRequestEnum: int
{
    case NOT_REQUESTED = 0;
    case REQUESTED_AND_CONTROL_ACTIVE = 1;
    case REQUESTED_AND_CONTROL_INACTIVE = 2;
    case REQUESTED_AND_CONTROL_BYPASSED = 3;
}