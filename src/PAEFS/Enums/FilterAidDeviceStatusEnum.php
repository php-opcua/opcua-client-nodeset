<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PAEFS\Enums;

/**
 * OPC UA enumeration type: FilterAidDeviceStatusEnum.
 *
 * @generated
 */
enum FilterAidDeviceStatusEnum: int
{
    case DeviceActive = 0;
    case DeviceInactive = 1;
    case FillingActive = 2;
    case DischargeActive = 3;
}