<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the ProductionOrderHeaderType structured data type.
 *
 * @generated
 */
readonly class ProductionOrderHeaderType
{
    public function __construct(
        public string $Number,
        public mixed $ProducedMaterial,
        public float $TargetQuantity,
        public bool $ContinueAtJobEnd,
        public mixed $TargetStartTime,
        public mixed $TargetEndTime,
        public string $DataSetID,
        public LocalizedText $DataSetDescription,
        public string $MaterialListID,
        public LocalizedText $MaterialListDescription,
    ) {
    }
}