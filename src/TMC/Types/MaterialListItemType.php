<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MaterialListItemType structured data type.
 *
 * @generated
 */
readonly class MaterialListItemType
{
    public function __construct(
        public string $AssemblyID,
        public string $MaterialPointID,
        public string $MaterialPointMES_ID,
        public mixed $MaterialSublot,
        public Enums\MaterialStockStatusEnumeration $MaterialStockStatus,
        public array $FollowUpMaterials,
    ) {
    }
}
