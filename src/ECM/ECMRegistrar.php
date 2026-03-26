<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class ECMRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ECMNodeIds::AcPeDataType_3), new Codecs\AcPeDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ECMNodeIds::AcPpDataType_3), new Codecs\AcPpDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ECMNodeIds::EnergyStateInformationDataType_3), new Codecs\EnergyStateInformationDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ECMNodeIds::MeasurementPeriodDataType_3), new Codecs\MeasurementPeriodDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ECMNodeIds::StandbyModeTransitionDataType_3), new Codecs\StandbyModeTransitionDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            ECMNodeIds::MeasurementPeriodEnum => Enums\MeasurementPeriodEnum::class,
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
        ];
    }
}