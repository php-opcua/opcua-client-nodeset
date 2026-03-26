<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Types;

/**
 * DTO for the FdtDeviceClassificationType structured data type.
 *
 * @generated
 */
readonly class FdtDeviceClassificationType
{
    public function __construct(
        public Enums\ClassificationDomainId $ClassificationDomain,
        public Enums\ClassificationId $DeviceClassification,
    ) {
    }
}