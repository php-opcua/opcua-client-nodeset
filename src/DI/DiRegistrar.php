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
class DiRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiNodeIds::TransferResultErrorDataType_3), new Codecs\TransferResultErrorDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiNodeIds::TransferResultDataDataType_3), new Codecs\TransferResultDataDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(DiNodeIds::ParameterResultDataType_3), new Codecs\ParameterResultDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            DiNodeIds::DeviceHealthEnumeration => Enums\DeviceHealthEnumeration::class,
            DiNodeIds::SoftwareClass_3 => Enums\SoftwareClass::class,
            DiNodeIds::LocationIndicationType => Enums\LocationIndicationType::class,
            DiNodeIds::SoftwareVersionFileType => Enums\SoftwareVersionFileType::class,
            DiNodeIds::UpdateBehavior_2 => Enums\UpdateBehavior::class,
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