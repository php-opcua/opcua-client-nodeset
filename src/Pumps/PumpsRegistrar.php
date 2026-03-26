<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class PumpsRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(PumpsNodeIds::PhysicalAddressDataType_3), new Codecs\PhysicalAddressDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            PumpsNodeIds::ControlModeEnum => Enums\ControlModeEnum::class,
            PumpsNodeIds::DistributionTypeEnum => Enums\DistributionTypeEnum::class,
            PumpsNodeIds::ExchangeModeEnum => Enums\ExchangeModeEnum::class,
            PumpsNodeIds::FieldbusEnum => Enums\FieldbusEnum::class,
            PumpsNodeIds::MaintenanceLevelEnum => Enums\MaintenanceLevelEnum::class,
            PumpsNodeIds::MultiPumpOperationModeEnum => Enums\MultiPumpOperationModeEnum::class,
            PumpsNodeIds::OperatingModeEnum => Enums\OperatingModeEnum::class,
            PumpsNodeIds::OperationModeEnum => Enums\OperationModeEnum::class,
            PumpsNodeIds::PortDirectionEnum => Enums\PortDirectionEnum::class,
            PumpsNodeIds::PumpClassEnum => Enums\PumpClassEnum::class,
            PumpsNodeIds::PumpKickModeEnum => Enums\PumpKickModeEnum::class,
            PumpsNodeIds::PumpRoleEnum => Enums\PumpRoleEnum::class,
            PumpsNodeIds::StateOfTheItemEnum => Enums\StateOfTheItemEnum::class,
            PumpsNodeIds::DeclarationOfConformityOptionSet_3 => Enums\DeclarationOfConformityOptionSet::class,
            PumpsNodeIds::ExplosionProtectionOptionSet_3 => Enums\ExplosionProtectionOptionSet::class,
            PumpsNodeIds::ExplosionZoneOptionSet_3 => Enums\ExplosionZoneOptionSet::class,
            PumpsNodeIds::OfferedControlModesOptionSet_3 => Enums\OfferedControlModesOptionSet::class,
            PumpsNodeIds::OfferedFieldbusesOptionSet_3 => Enums\OfferedFieldbusesOptionSet::class,
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\DI\DIRegistrar(),
            new \PhpOpcua\Nodeset\Machinery\MachineryRegistrar(),
        ];
    }
}