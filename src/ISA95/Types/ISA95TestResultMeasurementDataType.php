<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Types;

/**
 * DTO for the ISA95TestResultMeasurementDataType structured data type.
 *
 * @generated
 */
readonly class ISA95TestResultMeasurementDataType
{
    public function __construct(
        public NodeId $Id,
        public LocalizedText $TestResultDescription,
        public \DateTimeImmutable $Date,
        public mixed $Result,
        public mixed $ResultUnitOfMeasure,
        public \DateTimeImmutable $Expiration,
    ) {
    }
}