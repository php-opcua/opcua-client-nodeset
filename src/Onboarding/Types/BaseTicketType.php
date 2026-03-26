<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Types;

/**
 * DTO for the BaseTicketType structured data type.
 *
 * @generated
 */
readonly class BaseTicketType
{
    public function __construct(
        public string $ManufacturerName,
        public string $ModelName,
        public string $ModelVersion,
        public string $HardwareRevision,
        public string $SoftwareRevision,
        public string $SerialNumber,
        public \DateTimeImmutable $ManufactureDate,
        public array $Authorities,
    ) {
    }
}