<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnARTypeEnumeration.
 *
 * @generated
 */
enum PnARTypeEnumeration: int
{
    case IOCARSingle = 0;
    case IOSAR = 6;
    case IOCARSingleUsingRT_CLASS_3 = 16;
    case IOCARSR = 32;
}