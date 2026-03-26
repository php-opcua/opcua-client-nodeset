<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Types;

/**
 * DTO for the PowerlinkErrorEntryDataType structured data type.
 *
 * @generated
 */
readonly class PowerlinkErrorEntryDataType
{
    public function __construct(
        public int $entryType,
        public int $errorCode,
        public int $timeStamp,
        public int $additionalInformation,
    ) {
    }
}
