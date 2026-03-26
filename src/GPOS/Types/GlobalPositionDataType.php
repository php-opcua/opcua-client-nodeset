<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS\Types;

/**
 * DTO for the GlobalPositionDataType structured data type.
 *
 * @generated
 */
readonly class GlobalPositionDataType
{
    public function __construct(
        public ?float $Accuracy,
        public ?float $Floor,
    ) {
    }
}