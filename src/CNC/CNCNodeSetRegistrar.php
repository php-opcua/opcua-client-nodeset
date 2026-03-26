<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CNC;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class CNCNodeSetRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(CNCNodeSetNodeIds::CncPositionDataType_3), new Codecs\CncPositionDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            CNCNodeSetNodeIds::CncAxisStatus => Enums\CncAxisStatus::class,
            CNCNodeSetNodeIds::CncChannelProgramStatus => Enums\CncChannelProgramStatus::class,
            CNCNodeSetNodeIds::CncChannelStatus => Enums\CncChannelStatus::class,
            CNCNodeSetNodeIds::CncOperationMode => Enums\CncOperationMode::class,
            CNCNodeSetNodeIds::CncSpindleStatus => Enums\CncSpindleStatus::class,
            CNCNodeSetNodeIds::CncSpindleTurnDirection => Enums\CncSpindleTurnDirection::class,
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
