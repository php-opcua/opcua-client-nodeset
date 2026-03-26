<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetSpecialEvent structured data type.
 *
 * @generated
 */
readonly class BACnetSpecialEvent
{
    public function __construct(
        public mixed $Period,
        public array $ListOfTimeValues,
        public int $EventPriority,
    ) {
    }
}
