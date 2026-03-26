<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the RtlsLocationResult structured data type.
 *
 * @generated
 */
readonly class RtlsLocationResult
{
    public function __construct(
        public float $Speed,
        public float $Heading,
        public mixed $Rotation,
        public mixed $ReceiveTime,
    ) {
    }
}