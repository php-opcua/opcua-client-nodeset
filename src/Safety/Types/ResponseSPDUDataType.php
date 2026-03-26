<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Safety\Types;

/**
 * DTO for the ResponseSPDUDataType structured data type.
 *
 * @generated
 */
readonly class ResponseSPDUDataType
{
    public function __construct(
        public Enums\OutFlagsType $OutFlags,
        public int $OutSPDU_ID_1,
        public int $OutSPDU_ID_2,
        public int $OutSPDU_ID_3,
        public int $OutSafetyConsumerID,
        public int $OutMonitoringNumber,
        public int $OutCRC,
    ) {
    }
}
