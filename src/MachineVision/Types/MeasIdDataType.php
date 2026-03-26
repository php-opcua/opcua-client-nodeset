<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Types;

/**
 * DTO for the MeasIdDataType structured data type.
 *
 * @generated
 */
readonly class MeasIdDataType
{
    public function __construct(
        public mixed $Id,
        public ?LocalizedText $Description,
    ) {
    }
}
