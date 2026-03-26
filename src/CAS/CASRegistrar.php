<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class CASRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(CASNodeIds::FilterClassDataType_3), new Codecs\FilterClassDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            CASNodeIds::AirnetHealthStateEnum => Enums\AirnetHealthStateEnum::class,
            CASNodeIds::AirnetIntegratedStateEnum => Enums\AirnetIntegratedStateEnum::class,
            CASNodeIds::AirnetOperatingStateEnum => Enums\AirnetOperatingStateEnum::class,
            CASNodeIds::CompressorOperatingStateEnum => Enums\CompressorOperatingStateEnum::class,
            CASNodeIds::CompressorTypeEnum => Enums\CompressorTypeEnum::class,
            CASNodeIds::ConverterTypeEnum => Enums\ConverterTypeEnum::class,
            CASNodeIds::DisplacementTypeEnum => Enums\DisplacementTypeEnum::class,
            CASNodeIds::DrainTypeEnum => Enums\DrainTypeEnum::class,
            CASNodeIds::DryerOperatingStateEnum => Enums\DryerOperatingStateEnum::class,
            CASNodeIds::DryerTypeEnum => Enums\DryerTypeEnum::class,
            CASNodeIds::FilterClassEnum => Enums\FilterClassEnum::class,
            CASNodeIds::FilterTypeEnum => Enums\FilterTypeEnum::class,
            CASNodeIds::FluidTypeEnum => Enums\FluidTypeEnum::class,
            CASNodeIds::HealthStateEnum => Enums\HealthStateEnum::class,
            CASNodeIds::IntegratedStateEnum => Enums\IntegratedStateEnum::class,
            CASNodeIds::IpVersionEnum => Enums\IpVersionEnum::class,
            CASNodeIds::LubricationTypeEnum => Enums\LubricationTypeEnum::class,
            CASNodeIds::OperatingStateEnum => Enums\OperatingStateEnum::class,
            CASNodeIds::ReceiverTypeEnum => Enums\ReceiverTypeEnum::class,
            CASNodeIds::SensorTypeEnum => Enums\SensorTypeEnum::class,
            CASNodeIds::SeparatorTypeEnum => Enums\SeparatorTypeEnum::class,
            CASNodeIds::ValveTypeEnum => Enums\ValveTypeEnum::class,
            CASNodeIds::SensorTechnologyOptionSet_3 => Enums\SensorTechnologyOptionSet::class,
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\DI\DIRegistrar(),
            new \PhpOpcua\Nodeset\IA\IARegistrar(),
            new \PhpOpcua\Nodeset\Machinery\MachineryRegistrar(),
        ];
    }
}
