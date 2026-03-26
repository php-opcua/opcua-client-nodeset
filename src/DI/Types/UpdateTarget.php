<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the UpdateTarget structured data type.
 *
 * @generated
 */
readonly class UpdateTarget
{
    public function __construct(
        public string $ProductCode,
        public string $Model,
    ) {
    }
}