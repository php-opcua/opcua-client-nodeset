<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the FxPathElement structured data type.
 *
 * @generated
 */
readonly class FxPathElement
{
    public function __construct(
        public NodeId $AssetConnectorType,
        public ?int $ConnectorId,
        public ?string $ConnectorName,
    ) {
    }
}
