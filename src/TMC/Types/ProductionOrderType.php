<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Types;

/**
 * DTO for the ProductionOrderType structured data type.
 *
 * @generated
 */
readonly class ProductionOrderType
{
    public function __construct(
        public mixed $Header,
        public mixed $MaterialList,
        public mixed $DataSet,
    ) {
    }
}