<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetTime structured data type.
 *
 * @generated
 */
readonly class BACnetTime
{
    public function __construct(
        public int $Hour,
        public int $Minute,
        public int $Second,
        public int $Hundredths,
    ) {
    }
}
