<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the MaterialPointType structured data type.
 *
 * @generated
 */
readonly class MaterialPointType
{
    public function __construct(
        public string $ID,
        public LocalizedText $Description,
        public array $MaterialCapability,
        public mixed $ConnectedMaterialPoint,
        public bool $PropagatesProductionOrder,
    ) {
    }
}