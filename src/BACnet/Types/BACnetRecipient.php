<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetRecipient structured data type.
 *
 * @generated
 */
readonly class BACnetRecipient
{
    public function __construct(
        public mixed $Device,
        public mixed $Address,
    ) {
    }
}
