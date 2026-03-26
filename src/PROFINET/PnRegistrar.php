<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class PnRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PnNodeIds::PnDeviceDiagnosisDataType_3), new Codecs\PnDeviceDiagnosisDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PnNodeIds::PnIM5DataType_3), new Codecs\PnIM5DataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            PnNodeIds::IMTagSelectorEnumeration => Enums\IMTagSelectorEnumeration::class,
            PnNodeIds::PnARStateEnumeration => Enums\PnARStateEnumeration::class,
            PnNodeIds::PnARTypeEnumeration => Enums\PnARTypeEnumeration::class,
            PnNodeIds::PnAssetChangeEnumeration => Enums\PnAssetChangeEnumeration::class,
            PnNodeIds::PnAssetTypeEnumeration => Enums\PnAssetTypeEnumeration::class,
            PnNodeIds::PnChannelAccumulativeEnumeration => Enums\PnChannelAccumulativeEnumeration::class,
            PnNodeIds::PnChannelDirectionEnumeration => Enums\PnChannelDirectionEnumeration::class,
            PnNodeIds::PnChannelMaintenanceEnumeration => Enums\PnChannelMaintenanceEnumeration::class,
            PnNodeIds::PnChannelSpecifierEnumeration => Enums\PnChannelSpecifierEnumeration::class,
            PnNodeIds::PnChannelTypeEnumeration => Enums\PnChannelTypeEnumeration::class,
            PnNodeIds::PnDeviceStateEnumeration => Enums\PnDeviceStateEnumeration::class,
            PnNodeIds::PnLinkStateEnumeration => Enums\PnLinkStateEnumeration::class,
            PnNodeIds::PnModuleStateEnumeration => Enums\PnModuleStateEnumeration::class,
            PnNodeIds::PnPortStateEnumeration => Enums\PnPortStateEnumeration::class,
            PnNodeIds::PnSubmoduleAddInfoEnumeration => Enums\PnSubmoduleAddInfoEnumeration::class,
            PnNodeIds::PnSubmoduleARInfoEnumeration => Enums\PnSubmoduleARInfoEnumeration::class,
            PnNodeIds::PnSubmoduleIdentInfoEnumeration => Enums\PnSubmoduleIdentInfoEnumeration::class,
            PnNodeIds::PnDeviceRoleOptionSet_3 => Enums\PnDeviceRoleOptionSet::class,
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