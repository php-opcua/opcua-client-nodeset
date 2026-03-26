<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the OpticalScanResult structured data type.
 *
 * @generated
 */
readonly class OpticalScanResult
{
    public function __construct(
        public ?float $Grade,
        public mixed $Position,
        public ?string $Symbology,
        public ?NodeId $ImageId,
    ) {
    }
}