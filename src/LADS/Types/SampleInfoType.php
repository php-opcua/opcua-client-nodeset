<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\LADS\Types;

/**
 * DTO for the SampleInfoType structured data type.
 *
 * @generated
 */
readonly class SampleInfoType
{
    public function __construct(
        public string $ContainerId,
        public string $SampleId,
        public string $Position,
        public string $CustomData,
    ) {
    }
}