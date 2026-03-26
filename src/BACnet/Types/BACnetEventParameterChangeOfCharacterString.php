<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterChangeOfCharacterString structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterChangeOfCharacterString
{
    public function __construct(
        public int $Time_delay,
        public array $AlarmValues,
    ) {
    }
}
