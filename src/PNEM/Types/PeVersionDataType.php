<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM\Types;

/**
 * DTO for the PeVersionDataType structured data type.
 *
 * @generated
 */
readonly class PeVersionDataType
{
    public function __construct(
        public int $MajorVersion,
        public int $MinorVersion,
        public int $Revision,
    ) {
    }
}