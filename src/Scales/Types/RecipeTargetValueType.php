<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Types;

/**
 * DTO for the RecipeTargetValueType structured data type.
 *
 * @generated
 */
readonly class RecipeTargetValueType
{
    public function __construct(
        public int $TargetValueId,
        public ?NodeId $TargetValueNodeId,
        public LocalizedText $TargetValueName,
    ) {
    }
}