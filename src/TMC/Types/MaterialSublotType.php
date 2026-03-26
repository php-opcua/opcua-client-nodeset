<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MaterialSublotType structured data type.
 *
 * @generated
 */
readonly class MaterialSublotType
{
    public function __construct(
        public string $ID,
        public string $MES_ID,
        public mixed $MaterialLot,
        public string $MaterialStorageLocationID,
        public float $Quantity,
        public ?string $CarrierID,
        public ?string $RelativePositionID,
        public ?string $ParentSublotID,
        public array $Sublots,
    ) {
    }
}
