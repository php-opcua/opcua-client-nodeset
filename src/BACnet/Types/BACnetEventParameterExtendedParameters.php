<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterExtendedParameters structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterExtendedParameters
{
    public function __construct(
        public float $Real,
        public int $Unsigned,
        public bool $Boolean,
        public float $Double,
        public array $Octed,
        public string $CharacterString,
        public mixed $BitString,
        public int $Enum,
        public mixed $Date,
        public mixed $Time,
        public mixed $ObjectIdentifier,
        public mixed $Reference,
        public int $Integer,
    ) {
    }
}