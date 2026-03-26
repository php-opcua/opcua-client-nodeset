<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the ScanDataEpc structured data type.
 *
 * @generated
 */
readonly class ScanDataEpc
{
    public function __construct(
        public int $PC,
        public string $UId,
        public int $XPC_W1,
        public int $XPC_W2,
    ) {
    }
}