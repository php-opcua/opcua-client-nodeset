<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Types;

/**
 * DTO for the SystemStateDescriptionDataType structured data type.
 *
 * @generated
 */
readonly class SystemStateDescriptionDataType
{
    public function __construct(
        public Enums\SystemStateDataType $State,
        public mixed $StateDescription,
    ) {
    }
}
