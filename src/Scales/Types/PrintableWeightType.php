<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Types;

/**
 * DTO for the PrintableWeightType structured data type.
 *
 * @generated
 */
readonly class PrintableWeightType
{
    public function __construct(
        public string $Gross,
        public string $Net,
        public string $Tare,
    ) {
    }
}