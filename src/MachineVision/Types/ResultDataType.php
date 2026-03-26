<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Types;

/**
 * DTO for the ResultDataType structured data type.
 *
 * @generated
 */
readonly class ResultDataType
{
    public function __construct(
        public mixed $ResultId,
        public ?bool $HasTransferableDataOnFile,
        public bool $IsPartial,
        public ?bool $IsSimulated,
        public mixed $ResultState,
        public mixed $MeasId,
        public mixed $PartId,
        public mixed $ExternalRecipeId,
        public mixed $InternalRecipeId,
        public mixed $ProductId,
        public mixed $ExternalConfigurationId,
        public mixed $InternalConfigurationId,
        public mixed $JobId,
        public mixed $CreationTime,
        public mixed $ProcessingTimes,
        public array $ResultContent,
    ) {
    }
}
