<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: ClassificationDomainId.
 *
 * @generated
 */
enum ClassificationDomainId: int
{
    case PowerDistribution = 0;
    case MotionControl = 1;
    case Measurement = 2;
    case OperatorInterface = 3;
    case ModulesAndControllers = 4;
    case Communication = 5;
}
