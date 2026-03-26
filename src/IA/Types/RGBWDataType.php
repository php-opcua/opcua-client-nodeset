<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IA\Types;

/**
 * DTO for the RGBWDataType structured data type.
 *
 * @generated
 */
readonly class RGBWDataType
{
    public function __construct(
        public int $Red,
        public int $Green,
        public int $Blue,
        public ?int $White,
    ) {
    }
}