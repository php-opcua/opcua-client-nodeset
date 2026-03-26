<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Types;

/**
 * DTO for the PackMLAlarmDataType structured data type.
 *
 * @generated
 */
readonly class PackMLAlarmDataType
{
    public function __construct(
        public int $ID,
        public int $Value,
        public string $Message,
        public int $Category,
        public mixed $DateTime,
        public mixed $AckDateTime,
        public bool $Trigger,
    ) {
    }
}