<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Types;

/**
 * DTO for the AssetEventDataType structured data type.
 *
 * @generated
 */
readonly class AssetEventDataType
{
    public function __construct(
        public string $AssetId,
        public string $AssetType,
    ) {
    }
}