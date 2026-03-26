<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Types;

/**
 * DTO for the BinaryIdBaseDataType structured data type.
 *
 * @generated
 */
readonly class BinaryIdBaseDataType
{
    public function __construct(
        public mixed $Id,
        public mixed $Version,
        public ?string $Hash,
        public ?string $HashAlgorithm,
        public ?LocalizedText $Description,
    ) {
    }
}