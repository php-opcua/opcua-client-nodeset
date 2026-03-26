<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterChangeOfLifeSafety structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterChangeOfLifeSafety
{
    public function __construct(
        public Enums\BACnetLifeSafetyState $NewState,
        public Enums\BACnetLifeSafetyMode $NewMode,
        public Enums\BACnetLifeSafetyOperation $OperationExtended,
    ) {
    }
}
