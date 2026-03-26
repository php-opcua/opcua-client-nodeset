<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Types;

/**
 * DTO for the PartIdDataType structured data type.
 *
 * @generated
 */
readonly class PartIdDataType
{
    public function __construct(
        public mixed $Id,
        public ?LocalizedText $Description,
    ) {
    }
}
