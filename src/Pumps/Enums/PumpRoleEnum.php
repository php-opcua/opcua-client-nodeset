<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: PumpRoleEnum.
 *
 * @generated
 */
enum PumpRoleEnum: int
{
    case Slave = 0;
    case Master = 1;
    case SlaveAndAuxiliaryMaster = 2;
}