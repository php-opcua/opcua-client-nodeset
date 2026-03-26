<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM\Types;

/**
 * DTO for the StandbyModeTransitionDataType structured data type.
 *
 * @generated
 */
readonly class StandbyModeTransitionDataType
{
    public function __construct(
        public int $IDDestination,
        public mixed $CurrentTimeToDestination,
        public mixed $CurrentTimeToOperate,
        public float $EnergyConsumptionToDestination,
    ) {
    }
}