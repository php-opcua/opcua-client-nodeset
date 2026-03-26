<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Types;

/**
 * DTO for the PackMLProductDataType structured data type.
 *
 * @generated
 */
readonly class PackMLProductDataType
{
    public function __construct(
        public int $ProductID,
        public array $ProcessVariables,
        public array $Ingredients,
    ) {
    }
}