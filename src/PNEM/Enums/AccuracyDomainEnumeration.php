<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM\Enums;

/**
 * OPC UA enumeration type: AccuracyDomainEnumeration.
 *
 * @generated
 */
enum AccuracyDomainEnumeration: int
{
    case ACCURACY_DOMAIN_RESERVED = 0;
    case ACCURACY_DOMAIN_PERCENT_FULL_SCALE = 1;
    case ACCURACY_DOMAIN_PERCENT_ACTUAL_READING = 2;
    case ACCURACY_DOMAIN_IEC = 3;
    case ACCURACY_DOMAIN_EN = 4;
}