<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS\Types;

/**
 * DTO for the GroundControlPointDataType structured data type.
 *
 * @generated
 */
readonly class GroundControlPointDataType
{
    public function __construct(
        public mixed $GlobalPosition,
        public mixed $LocalPosition,
    ) {
    }
}
