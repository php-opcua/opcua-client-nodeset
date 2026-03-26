<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetDeviceObjectPropertyReference structured data type.
 *
 * @generated
 */
readonly class BACnetDeviceObjectPropertyReference
{
    public function __construct(
        public mixed $ObjectIdentifier,
        public ?Enums\BACnetPropertyIdentifier $PropertyIdentifier,
        public ?int $PropertyArrayIndex,
        public mixed $DeviceIdentifier,
    ) {
    }
}