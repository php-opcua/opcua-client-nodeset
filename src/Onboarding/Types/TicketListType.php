<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Types;

/**
 * DTO for the TicketListType structured data type.
 *
 * @generated
 */
readonly class TicketListType
{
    public function __construct(
        public array $Devices,
        public array $Composites,
    ) {
    }
}
