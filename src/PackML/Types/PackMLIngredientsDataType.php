<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Types;

/**
 * DTO for the PackMLIngredientsDataType structured data type.
 *
 * @generated
 */
readonly class PackMLIngredientsDataType
{
    public function __construct(
        public int $IngredientID,
        public array $Parameter,
    ) {
    }
}