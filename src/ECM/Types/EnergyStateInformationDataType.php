<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM\Types;

/**
 * DTO for the EnergyStateInformationDataType structured data type.
 *
 * @generated
 */
readonly class EnergyStateInformationDataType
{
    public function __construct(
        public int $IDSource,
        public int $IDDestination,
        public mixed $RegularTimeToOperate,
        public float $ModePowerConsumption,
    ) {
    }
}
