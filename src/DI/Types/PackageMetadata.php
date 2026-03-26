<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Types;

/**
 * DTO for the PackageMetadata structured data type.
 *
 * @generated
 */
readonly class PackageMetadata
{
    public function __construct(
        public string $Name,
        public ?string $Description,
        public string $ManufacturerUri,
        public string $Manufacturer,
        public string $PackageRevision,
        public Enums\PackageType $PackageType,
        public ?string $SoftwareSubClass,
        public ?bool $DeployCompletePackage,
        public ?string $SoftwareRevision,
        public ?\DateTimeImmutable $ReleaseDate,
        public ?string $TargetManufacturerUri,
        public ?string $TargetManufacturer,
        public array $UpdateTargets,
        public array $Files,
        public array $Compatibilities,
        public array $Assignments,
    ) {
    }
}