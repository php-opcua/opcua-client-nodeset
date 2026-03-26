<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Types;

/**
 * DTO for the ISA95TestResultDataType structured data type.
 *
 * @generated
 */
readonly class ISA95TestResultDataType
{
    public function __construct(
        public NodeId $Id,
        public LocalizedText $TestResultDescription,
        public \DateTimeImmutable $Date,
        public mixed $Result,
        public string $ResultUnitOfMeasure,
        public \DateTimeImmutable $Expiration,
    ) {
    }
}