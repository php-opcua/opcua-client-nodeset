<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the TransferResultErrorDataType structured data type.
 *
 * @generated
 */
readonly class TransferResultErrorDataType
{
    public function __construct(
        public int $Status,
        public mixed $Diagnostics,
    ) {
    }
}