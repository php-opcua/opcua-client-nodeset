<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetAddress structured data type.
 *
 * @generated
 */
readonly class BACnetAddress
{
    public function __construct(
        public int $NetworkNumber,
        public string $MacAddress,
    ) {
    }
}
