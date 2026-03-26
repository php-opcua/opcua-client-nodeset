<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MaterialStorageBufferDataType structured data type.
 *
 * @generated
 */
readonly class MaterialStorageBufferDataType
{
    public function __construct(
        public string $ID,
        public mixed $StoredMaterial,
        public mixed $EngineeringUnits,
        public float $TotalStorageCapacity,
        public Enums\StorageLogicEnumeration $StorageLogic,
        public Enums\StorageMixingLogicEnumeration $MixingLogic,
    ) {
    }
}
