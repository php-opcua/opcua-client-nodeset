<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Types;

/**
 * DTO for the PackMLRemoteInterfaceDataType structured data type.
 *
 * @generated
 */
readonly class PackMLRemoteInterfaceDataType
{
    public function __construct(
        public int $Number,
        public int $ControlCmdNumber,
        public int $CmdValue,
        public array $Parameter,
    ) {
    }
}
