<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetFaultParameterFaultCharacterstring structured data type.
 *
 * @generated
 */
readonly class BACnetFaultParameterFaultCharacterstring
{
    public function __construct(
        public string $Fault_characterstring,
    ) {
    }
}
