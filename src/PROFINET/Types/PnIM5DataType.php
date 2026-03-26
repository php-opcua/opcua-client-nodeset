<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Types;

/**
 * DTO for the PnIM5DataType structured data type.
 *
 * @generated
 */
readonly class PnIM5DataType
{
    public function __construct(
        public string $Annotation,
        public string $OrderId,
        public int $VendorId,
        public string $SerialNumber,
        public string $HardwareRevision,
        public string $SoftwareRevision,
    ) {
    }
}
