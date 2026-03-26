<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class OpcISA95Registrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OpcISA95NodeIds::CurrencyCode_3), new Codecs\CurrencyCodeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OpcISA95NodeIds::ISA95TestResultMeasurementDataType_3), new Codecs\ISA95TestResultMeasurementDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OpcISA95NodeIds::ISA95TestResultDataType_3), new Codecs\ISA95TestResultDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OpcISA95NodeIds::ISA95AssetAssignmentDataType_3), new Codecs\ISA95AssetAssignmentDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            OpcISA95NodeIds::ISA95EquipmentElementLevelEnum => Enums\ISA95EquipmentElementLevelEnum::class,
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