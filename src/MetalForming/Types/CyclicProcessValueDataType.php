<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MetalForming\Types;

/**
 * DTO for the CyclicProcessValueDataType structured data type.
 *
 * @generated
 */
readonly class CyclicProcessValueDataType
{
    public function __construct(
        public mixed $AnalogSignal,
        public mixed $Setpoint,
        public mixed $CycleCount,
        public bool $IsActive,
    ) {
    }
}
