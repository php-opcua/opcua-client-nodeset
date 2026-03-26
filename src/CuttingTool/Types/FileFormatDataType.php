<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CuttingTool\Types;

/**
 * DTO for the FileFormatDataType structured data type.
 *
 * @generated
 */
readonly class FileFormatDataType
{
    public function __construct(
        public string $Name,
        public string $FileExtension,
        public mixed $Version,
    ) {
    }
}
