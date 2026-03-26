<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the TransferResultDataDataType structured data type.
 *
 * @generated
 */
readonly class TransferResultDataDataType
{
    public function __construct(
        public int $SequenceNumber,
        public bool $EndOfResults,
        public array $ParameterDefs,
    ) {
    }
}