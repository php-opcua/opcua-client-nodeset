<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Woodworking\Types;

/**
 * DTO for the WwMessageArgumentValueDataType structured data type.
 *
 * @generated
 */
readonly class WwMessageArgumentValueDataType
{
    public function __construct(
        public array $Array,
        public bool $Boolean,
        public int $Int16,
        public int $Int32,
        public int $Int64,
        public int $SByte,
        public int $UInt16,
        public int $UInt32,
        public int $UInt64,
        public int $Byte,
        public \DateTimeImmutable $DateTime,
        public string $Guid,
        public LocalizedText $LocalizedText,
        public float $Double,
        public float $Float,
        public string $String,
        public string $Other,
    ) {
    }
}
