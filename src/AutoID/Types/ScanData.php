<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the ScanData structured data type.
 *
 * @generated
 */
readonly class ScanData
{
    public function __construct(
        public string $ByteString,
        public string $String,
        public mixed $Epc,
        public mixed $Custom,
    ) {
    }
}
