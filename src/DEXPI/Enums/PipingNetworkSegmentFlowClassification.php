<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DEXPI\Enums;

/**
 * OPC UA enumeration type: PipingNetworkSegmentFlowClassification.
 *
 * @generated
 */
enum PipingNetworkSegmentFlowClassification: int
{
    case DualFlowPipingNetworkSegment = 0;
    case SingleFlowPipingNetworkSegment = 1;
}