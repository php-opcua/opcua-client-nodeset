<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetRecipientProcess structured data type.
 *
 * @generated
 */
readonly class BACnetRecipientProcess
{
    public function __construct(
        public mixed $Recipient,
        public int $ProcessIdentifier,
    ) {
    }
}