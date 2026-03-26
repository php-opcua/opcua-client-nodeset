<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\I4AAS\Types;

/**
 * DTO for the AASKeyDataType structured data type.
 *
 * @generated
 */
readonly class AASKeyDataType
{
    public function __construct(
        public Enums\AASKeyElementsDataType $Type,
        public bool $Local,
        public string $Value,
        public Enums\AASKeyTypeDataType $IdType,
    ) {
    }
}