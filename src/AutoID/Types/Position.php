<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the Position structured data type.
 *
 * @generated
 */
readonly class Position
{
    public function __construct(
        public int $PositionX,
        public int $PositionY,
        public int $SizeX,
        public int $SizeY,
        public int $Rotation,
    ) {
    }
}