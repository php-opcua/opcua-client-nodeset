<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Types;

/**
 * DTO for the RegistrationParameters structured data type.
 *
 * @generated
 */
readonly class RegistrationParameters
{
    public function __construct(
        public mixed $Path,
        public int $SelectionFlags,
    ) {
    }
}