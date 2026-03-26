<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: ApplicationIdEnumeration.
 *
 * @generated
 */
enum ApplicationIdEnumeration: int
{
    case AdjustSetValue = 0;
    case AssetManagement = 1;
    case AuditTrail = 2;
    case Configuration = 3;
    case Diagnosis = 4;
    case Force = 5;
    case Observe = 6;
    case OfflineCompare = 7;
    case OfflineParameterize = 8;
    case OnlineCompare = 9;
    case OnlineParameterize = 10;
    case Identify = 11;
    case Calibration = 12;
    case MainOperation = 13;
    case NetworkManagement = 14;
}