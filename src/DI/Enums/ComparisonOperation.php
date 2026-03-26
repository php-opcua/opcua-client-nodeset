<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Enums;

/**
 * OPC UA enumeration type: ComparisonOperation.
 *
 * @generated
 */
enum ComparisonOperation: int
{
    case EqualTo = 0;
    case GreaterThan = 1;
    case GreaterEqual = 2;
    case LessThen = 3;
    case LessEqual = 4;
    case RegularExpression = 5;
    case OneOf = 6;
    case Exist = 7;
}