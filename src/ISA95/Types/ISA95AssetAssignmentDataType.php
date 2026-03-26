<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Types;

/**
 * DTO for the ISA95AssetAssignmentDataType structured data type.
 *
 * @generated
 */
readonly class ISA95AssetAssignmentDataType
{
    public function __construct(
        public NodeId $Id,
        public LocalizedText $AssinmentDescription,
        public \DateTimeImmutable $StartTime,
        public \DateTimeImmutable $EndTime,
    ) {
    }
}