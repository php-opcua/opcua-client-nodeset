<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Types;

/**
 * DTO for the RecipeThresholdType structured data type.
 *
 * @generated
 */
readonly class RecipeThresholdType
{
    public function __construct(
        public int $ThresholdId,
        public ?NodeId $ThresholdNodeId,
        public LocalizedText $ThresholdName,
    ) {
    }
}
