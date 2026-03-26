<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class PnEmRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PnEmNodeIds::AcPeDataType_3), new Codecs\AcPeDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PnEmNodeIds::AcPpDataType_3), new Codecs\AcPpDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PnEmNodeIds::EnergyStateInformationDataType_3), new Codecs\EnergyStateInformationDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PnEmNodeIds::PeVersionDataType_3), new Codecs\PeVersionDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PnEmNodeIds::StandbyModeTransitionDataType_3), new Codecs\StandbyModeTransitionDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            PnEmNodeIds::AccuracyClassEnumeration => Enums\AccuracyClassEnumeration::class,
            PnEmNodeIds::AccuracyDomainEnumeration => Enums\AccuracyDomainEnumeration::class,
            PnEmNodeIds::PeClassEnumeration => Enums\PeClassEnumeration::class,
            PnEmNodeIds::PeSubclassEnumeration => Enums\PeSubclassEnumeration::class,
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\DI\DIRegistrar(),
        ];
    }
}
