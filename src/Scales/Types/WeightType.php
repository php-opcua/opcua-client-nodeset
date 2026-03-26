<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Types;

/**
 * DTO for the WeightType structured data type.
 *
 * @generated
 */
readonly class WeightType
{
    public function __construct(
        public float $Gross,
        public float $Net,
        public float $Tare,
    ) {
    }
}