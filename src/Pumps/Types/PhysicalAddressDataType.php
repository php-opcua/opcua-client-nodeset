<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Types;

/**
 * DTO for the PhysicalAddressDataType structured data type.
 *
 * @generated
 */
readonly class PhysicalAddressDataType
{
    public function __construct(
        public ?LocalizedText $Street,
        public ?LocalizedText $Number,
        public ?LocalizedText $City,
        public ?LocalizedText $PostalCode,
        public ?LocalizedText $State,
        public ?LocalizedText $Country,
    ) {
    }
}