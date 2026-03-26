<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the ScanResult structured data type.
 *
 * @generated
 */
readonly class ScanResult
{
    public function __construct(
        public mixed $CodeType,
        public mixed $ScanData,
        public mixed $Timestamp,
        public mixed $Location,
    ) {
    }
}