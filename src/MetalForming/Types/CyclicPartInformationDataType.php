<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MetalForming\Types;

/**
 * DTO for the CyclicPartInformationDataType structured data type.
 *
 * @generated
 */
readonly class CyclicPartInformationDataType
{
    public function __construct(
        public mixed $CycleCount,
        public ?string $PartId,
    ) {
    }
}
