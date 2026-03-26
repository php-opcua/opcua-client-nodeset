<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: FilterTypeEnum.
 *
 * @generated
 */
enum FilterTypeEnum: int
{
    case Other = 0;
    case ActivatedCarbonFilter = 1;
    case AdsorptionFilter = 2;
    case CoalescingFilter = 3;
    case ParticulateFilter = 4;
    case FabricFilter = 5;
    case SterileFilter = 6;
}