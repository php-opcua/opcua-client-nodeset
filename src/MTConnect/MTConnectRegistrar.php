<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class MTConnectRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MTConnectNodeIds::AssetEventDataType_3), new Codecs\AssetEventDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MTConnectNodeIds::MessageDataType_3), new Codecs\MessageDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MTConnectNodeIds::ThreeSpaceSampleDataType_3), new Codecs\ThreeSpaceSampleDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            MTConnectNodeIds::MTCategoryType_2 => Enums\MTCategoryType::class,
            MTConnectNodeIds::MTCoordinateSystemType_2 => Enums\MTCoordinateSystemType::class,
            MTConnectNodeIds::MTRepresentationType_2 => Enums\MTRepresentationType::class,
            MTConnectNodeIds::MTResetTriggerType_2 => Enums\MTResetTriggerType::class,
            MTConnectNodeIds::MTStatisticType_2 => Enums\MTStatisticType::class,
            MTConnectNodeIds::MTSeverityDataType_2 => Enums\MTSeverityDataType::class,
            MTConnectNodeIds::QualifierDataType_2 => Enums\QualifierDataType::class,
            MTConnectNodeIds::ActiveStateDataType_2 => Enums\ActiveStateDataType::class,
            MTConnectNodeIds::AvailabilityDataType_2 => Enums\AvailabilityDataType::class,
            MTConnectNodeIds::AxisCouplingDataType_2 => Enums\AxisCouplingDataType::class,
            MTConnectNodeIds::AxisStateDataType_2 => Enums\AxisStateDataType::class,
            MTConnectNodeIds::CompositionStateDataType_2 => Enums\CompositionStateDataType::class,
            MTConnectNodeIds::ControllerModeDataType_2 => Enums\ControllerModeDataType::class,
            MTConnectNodeIds::DirectionDataType_2 => Enums\DirectionDataType::class,
            MTConnectNodeIds::EmergencyStopDataType_2 => Enums\EmergencyStopDataType::class,
            MTConnectNodeIds::ExecutionDataType_2 => Enums\ExecutionDataType::class,
            MTConnectNodeIds::FunctionalModeDataType_2 => Enums\FunctionalModeDataType::class,
            MTConnectNodeIds::InterfaceStateDataType_2 => Enums\InterfaceStateDataType::class,
            MTConnectNodeIds::InterfaceStatusDataType_2 => Enums\InterfaceStatusDataType::class,
            MTConnectNodeIds::OnOffDataType_2 => Enums\OnOffDataType::class,
            MTConnectNodeIds::OpenStateDataType_2 => Enums\OpenStateDataType::class,
            MTConnectNodeIds::PathModeDataType_2 => Enums\PathModeDataType::class,
            MTConnectNodeIds::ProgramEditDataType_2 => Enums\ProgramEditDataType::class,
            MTConnectNodeIds::RotaryModeDataType_2 => Enums\RotaryModeDataType::class,
            MTConnectNodeIds::YesNoDataType_2 => Enums\YesNoDataType::class,
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
