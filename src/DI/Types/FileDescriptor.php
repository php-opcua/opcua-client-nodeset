<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the FileDescriptor structured data type.
 *
 * @generated
 */
readonly class FileDescriptor
{
    public function __construct(
        public Enums\FileType $FileType,
        public string $FileName,
        public ?string $MimeType,
        public ?string $Language,
    ) {
    }
}