<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetAddressBinding structured data type.
 *
 * @generated
 */
readonly class BACnetAddressBinding
{
    public function __construct(
        public mixed $DeviceObjectIdentifier,
        public mixed $DeviceAddress,
    ) {
    }
}
