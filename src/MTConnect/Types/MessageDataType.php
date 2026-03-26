<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Types;

/**
 * DTO for the MessageDataType structured data type.
 *
 * @generated
 */
readonly class MessageDataType
{
    public function __construct(
        public ?string $NativeCode,
        public string $Text,
    ) {
    }
}