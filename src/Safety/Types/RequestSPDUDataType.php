<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Safety\Types;

/**
 * DTO for the RequestSPDUDataType structured data type.
 *
 * @generated
 */
readonly class RequestSPDUDataType
{
    public function __construct(
        public int $InSafetyConsumerID,
        public int $InMonitoringNumber,
        public Enums\InFlagsType $InFlags,
    ) {
    }
}