<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MDIS\Types;

/**
 * DTO for the MDISVersionDataType structured data type.
 *
 * @generated
 */
readonly class MDISVersionDataType
{
    public function __construct(
        public int $MajorVersion,
        public int $MinorVersion,
        public int $Build,
    ) {
    }
}
