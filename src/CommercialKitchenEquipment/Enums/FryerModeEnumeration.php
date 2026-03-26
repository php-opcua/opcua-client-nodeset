<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment\Enums;

/**
 * OPC UA enumeration type: FryerModeEnumeration.
 *
 * @generated
 */
enum FryerModeEnumeration: int
{
    case Off = 0;
    case Preheat = 1;
    case Melting = 2;
    case Frying = 3;
    case StandBy = 4;
    case Filtering = 5;
    case Error = 6;
}
