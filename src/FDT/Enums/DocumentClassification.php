<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: DocumentClassification.
 *
 * @generated
 */
enum DocumentClassification: int
{
    case Help = 0;
    case TechnicalDocumentation = 1;
    case OrderingInformation = 2;
    case Miscellaneous = 3;
    case TenderSpecification = 4;
}