<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: FunctionExecutionResultState.
 *
 * @generated
 */
enum FunctionExecutionResultState: int
{
    case Cancel = 0;
    case Success = 1;
    case Fail = 2;
}