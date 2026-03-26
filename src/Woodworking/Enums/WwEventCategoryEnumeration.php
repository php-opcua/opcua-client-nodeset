<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Woodworking\Enums;

/**
 * OPC UA enumeration type: WwEventCategoryEnumeration.
 *
 * @generated
 */
enum WwEventCategoryEnumeration: int
{
    case OTHER = 0;
    case DIAGNOSTIC = 1;
    case INFORMATION = 2;
    case WARNING = 3;
    case ALARM = 4;
    case ERROR = 5;
}