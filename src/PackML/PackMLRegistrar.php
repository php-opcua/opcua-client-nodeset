<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class PackMLRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PackMLNodeIds::PackMLAlarmDataType_3), new Codecs\PackMLAlarmDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PackMLNodeIds::PackMLCountDataType_3), new Codecs\PackMLCountDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PackMLNodeIds::PackMLDescriptorDataType_3), new Codecs\PackMLDescriptorDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PackMLNodeIds::PackMLIngredientsDataType_3), new Codecs\PackMLIngredientsDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PackMLNodeIds::PackMLProductDataType_3), new Codecs\PackMLProductDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PackMLNodeIds::PackMLRemoteInterfaceDataType_3), new Codecs\PackMLRemoteInterfaceDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            PackMLNodeIds::ProductionMaintenanceModeEnum => Enums\ProductionMaintenanceModeEnum::class,
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
