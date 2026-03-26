<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Types;

/**
 * DTO for the FilterClassDataType structured data type.
 *
 * @generated
 */
readonly class FilterClassDataType
{
    public function __construct(
        public Enums\FilterClassEnum $A,
        public Enums\FilterClassEnum $B,
        public Enums\FilterClassEnum $C,
    ) {
    }
}