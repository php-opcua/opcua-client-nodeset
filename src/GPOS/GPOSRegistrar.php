<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class GPOSRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(GPOSNodeIds::_3DGeographicCoordinateDataType_3), new Codecs\_3DGeographicCoordinateDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(GPOSNodeIds::GlobalPositionDataType_3), new Codecs\GlobalPositionDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(GPOSNodeIds::GlobalLocationDataType_3), new Codecs\GlobalLocationDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(GPOSNodeIds::GroundControlPointDataType_3), new Codecs\GroundControlPointDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\RSL\RSLRegistrar(),
        ];
    }
}