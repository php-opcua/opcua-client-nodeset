<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the ScanSettings structured data type.
 *
 * @generated
 */
readonly class ScanSettings
{
    public function __construct(
        public mixed $Duration,
        public int $Cycles,
        public bool $DataAvailable,
        public ?Enums\LocationTypeEnumeration $LocationType,
    ) {
    }
}