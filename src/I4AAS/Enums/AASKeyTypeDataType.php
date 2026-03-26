<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\I4AAS\Enums;

/**
 * OPC UA enumeration type: AASKeyTypeDataType.
 *
 * @generated
 */
enum AASKeyTypeDataType: int
{
    case IdShort = 0;
    case FragmentId = 1;
    case Custom = 2;
    case IRDI = 3;
    case IRI = 4;
}