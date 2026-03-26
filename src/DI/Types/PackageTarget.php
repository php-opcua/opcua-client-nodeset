<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the PackageTarget structured data type.
 *
 * @generated
 */
readonly class PackageTarget
{
    public function __construct(
        public ?NodeId $TargetType,
        public ?NodeId $TargetNode,
        public ?string $ProductInstanceUri,
        public ?string $AssetId,
        public ?string $ManufacturerUri,
        public ?string $ProductCode,
        public ?string $SerialNumber,
        public array $FxPath,
        public array $FxScope,
        public array $BrowsePath,
        public ?string $TargetServer,
    ) {
    }
}
