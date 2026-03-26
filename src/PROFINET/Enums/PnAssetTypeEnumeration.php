<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Enums;

/**
 * OPC UA enumeration type: PnAssetTypeEnumeration.
 *
 * @generated
 */
enum PnAssetTypeEnumeration: int
{
    case DEVICE = 0;
    case MODULE = 1;
    case SUBMODULE = 2;
    case ASSET = 3;
}
