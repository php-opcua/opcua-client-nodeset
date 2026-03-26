<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IA\Enums;

/**
 * OPC UA enumeration type: StacklightOperationMode.
 *
 * @generated
 */
enum StacklightOperationMode: int
{
    case Segmented = 0;
    case Levelmeter = 1;
    case Running_Light = 2;
    case Other = 3;
}
