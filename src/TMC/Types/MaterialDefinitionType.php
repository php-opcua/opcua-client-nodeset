<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MaterialDefinitionType structured data type.
 *
 * @generated
 */
readonly class MaterialDefinitionType
{
    public function __construct(
        public string $ID,
        public string $MES_ID,
        public LocalizedText $Description,
        public mixed $BaseUnitOfMeasure,
        public bool $BatchManaged,
        public ?string $GroupID,
        public ?string $ParentGroupID,
        public ?int $ShelfLife,
        public array $Properties,
    ) {
    }
}