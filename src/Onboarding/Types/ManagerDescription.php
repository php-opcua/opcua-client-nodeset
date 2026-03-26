<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Types;

/**
 * DTO for the ManagerDescription structured data type.
 *
 * @generated
 */
readonly class ManagerDescription
{
    public function __construct(
        public LocalizedText $Name,
        public bool $IsRequired,
        public mixed $PurposeUri,
        public mixed $ProtocolUri,
        public array $EndpointUrls,
    ) {
    }
}