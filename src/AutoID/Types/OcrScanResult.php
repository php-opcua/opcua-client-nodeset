<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the OcrScanResult structured data type.
 *
 * @generated
 */
readonly class OcrScanResult
{
    public function __construct(
        public NodeId $ImageId,
        public int $Quality,
        public mixed $Position,
        public ?string $Font,
        public mixed $DecodingTime,
    ) {
    }
}