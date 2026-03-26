<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM\Types;

/**
 * DTO for the MeasurementPeriodDataType structured data type.
 *
 * @generated
 */
readonly class MeasurementPeriodDataType
{
    public function __construct(
        public mixed $Duration,
        public Enums\MeasurementPeriodEnum $Definition,
    ) {
    }
}
