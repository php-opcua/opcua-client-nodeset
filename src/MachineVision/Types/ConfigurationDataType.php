<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Types;

/**
 * DTO for the ConfigurationDataType structured data type.
 *
 * @generated
 */
readonly class ConfigurationDataType
{
    public function __construct(
        public ?bool $HasTransferableDataOnFile,
        public mixed $ExternalId,
        public mixed $InternalId,
        public mixed $LastModified,
    ) {
    }
}