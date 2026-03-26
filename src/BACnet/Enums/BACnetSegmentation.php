<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Enums;

/**
 * OPC UA enumeration type: BACnetSegmentation.
 *
 * @generated
 */
enum BACnetSegmentation: int
{
    case segmented_both = 0;
    case segmented_transmit = 1;
    case segmented_receive = 2;
    case no_segmentation = 3;
}