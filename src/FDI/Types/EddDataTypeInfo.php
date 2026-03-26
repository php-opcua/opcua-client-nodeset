<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Types;

/**
 * DTO for the EddDataTypeInfo structured data type.
 *
 * @generated
 */
readonly class EddDataTypeInfo
{
    public function __construct(
        public Enums\EddDataTypeEnum $EddDataType,
        public int $Size,
    ) {
    }
}
