<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetTimeStamp structured data type.
 *
 * @generated
 */
readonly class BACnetTimeStamp
{
    public function __construct(
        public mixed $Time,
        public int $SequenceNumber,
        public mixed $DateTime,
    ) {
    }
}
