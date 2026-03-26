<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetMessageClass structured data type.
 *
 * @generated
 */
readonly class BACnetMessageClass
{
    public function __construct(
        public mixed $Unsigned,
        public string $String,
    ) {
    }
}
