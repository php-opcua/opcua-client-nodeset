<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the AntennaNameIdPair structured data type.
 *
 * @generated
 */
readonly class AntennaNameIdPair
{
    public function __construct(
        public int $AntennaId,
        public string $AntennaName,
    ) {
    }
}
