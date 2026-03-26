<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class DiPackageMetadataRegistrar implements GeneratedTypeRegistrar
{
    /**
     * @param bool $only If true, skip loading dependency registrars.
     */
    public function __construct(public bool $only = false)
    {
    }

    /**
     * @param ExtensionObjectRepository $repository
     * @return void
     */
    public function registerCodecs(ExtensionObjectRepository $repository): void
    {
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiPackageMetadataNodeIds::PackageMetadata_3), new Codecs\PackageMetadataCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiPackageMetadataNodeIds::UpdateTarget_3), new Codecs\UpdateTargetCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiPackageMetadataNodeIds::FileDescriptor_3), new Codecs\FileDescriptorCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiPackageMetadataNodeIds::CompatibilityOption_3), new Codecs\CompatibilityOptionCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiPackageMetadataNodeIds::CompatibilityRequirement_3), new Codecs\CompatibilityRequirementCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiPackageMetadataNodeIds::Assignment_3), new Codecs\AssignmentCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiPackageMetadataNodeIds::PackageTarget_3), new Codecs\PackageTargetCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiPackageMetadataNodeIds::FxPathElement_3), new Codecs\FxPathElementCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            DiPackageMetadataNodeIds::PackageType => Enums\PackageType::class,
            DiPackageMetadataNodeIds::FileType => Enums\FileType::class,
            DiPackageMetadataNodeIds::ComparisonOperation => Enums\ComparisonOperation::class,
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
        ];
    }
}
