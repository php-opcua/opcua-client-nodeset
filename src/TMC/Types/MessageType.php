<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MessageType structured data type.
 *
 * @generated
 */
readonly class MessageType
{
    public function __construct(
        public string $ID,
        public LocalizedText $LocalText,
    ) {
    }
}