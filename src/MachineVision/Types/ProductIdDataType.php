<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Types;

/**
 * DTO for the ProductIdDataType structured data type.
 *
 * @generated
 */
readonly class ProductIdDataType
{
    public function __construct(
        public mixed $Id,
        public ?LocalizedText $Description,
    ) {
    }
}