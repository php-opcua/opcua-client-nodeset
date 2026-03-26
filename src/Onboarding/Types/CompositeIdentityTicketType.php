<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Types;

/**
 * DTO for the CompositeIdentityTicketType structured data type.
 *
 * @generated
 */
readonly class CompositeIdentityTicketType
{
    public function __construct(
        public mixed $CompositeInstanceUri,
        public array $Devices,
        public array $Composites,
    ) {
    }
}