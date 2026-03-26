<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Types;

/**
 * DTO for the ProcessingTimesDataType structured data type.
 *
 * @generated
 */
readonly class ProcessingTimesDataType
{
    public function __construct(
        public mixed $StartTime,
        public mixed $EndTime,
        public mixed $AcquisitionDuration,
        public mixed $ProcessingDuration,
    ) {
    }
}
