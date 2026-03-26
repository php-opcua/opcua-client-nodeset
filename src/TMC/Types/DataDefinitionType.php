<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the DataDefinitionType structured data type.
 *
 * @generated
 */
readonly class DataDefinitionType
{
    public function __construct(
        public mixed $EngineeringUnits,
        public string $DisplayFormat,
        public Enums\ParameterDependencyEnumeration $Dependency,
        public string $DataType,
        public bool $UserSubset,
        public mixed $ControlRange,
        public mixed $AlarmRange,
    ) {
    }
}
