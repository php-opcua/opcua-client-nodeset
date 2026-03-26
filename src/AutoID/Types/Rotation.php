<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the Rotation structured data type.
 *
 * @generated
 */
readonly class Rotation
{
    public function __construct(
        public float $Yaw,
        public float $Pitch,
        public float $Roll,
    ) {
    }
}