<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: DistributionTypeEnum.
 *
 * @generated
 */
enum DistributionTypeEnum: int
{
    case ManufacturerSpecific = 0;
    case OperatorSpecific = 1;
    case ConcerningTimeDistribution = 2;
    case ConcerningLoadDistribution = 3;
}
