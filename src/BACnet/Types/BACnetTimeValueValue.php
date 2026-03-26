<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetTimeValueValue structured data type.
 *
 * @generated
 */
readonly class BACnetTimeValueValue
{
    public function __construct(
        public bool $BooleanValue,
        public mixed $UnsignedValue,
        public mixed $SignedValue,
        public string $OctedStringValue,
        public string $CharStringValue,
        public mixed $ObjectIdentifierValue,
        public int $EnumerationValue,
        public mixed $BitStringValue,
    ) {
    }
}