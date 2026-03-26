<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MaterialLotType structured data type.
 *
 * @generated
 */
readonly class MaterialLotType
{
    public function __construct(
        public string $ID,
        public string $MES_ID,
        public LocalizedText $Description,
        public mixed $MaterialDefinition,
        public Enums\MaterialStockStatusEnumeration $Status,
        public mixed $ProductionDate,
        public mixed $BestUsedBeforeDate,
        public array $Properties,
    ) {
    }
}