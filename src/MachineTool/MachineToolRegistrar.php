<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineTool;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class MachineToolRegistrar implements GeneratedTypeRegistrar
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
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            MachineToolNodeIds::ChannelMode_2 => Enums\ChannelMode::class,
            MachineToolNodeIds::ChannelState_2 => Enums\ChannelState::class,
            MachineToolNodeIds::EDMGeneratorState_2 => Enums\EDMGeneratorState::class,
            MachineToolNodeIds::LaserState_2 => Enums\LaserState::class,
            MachineToolNodeIds::MachineOperationMode => Enums\MachineOperationMode::class,
            MachineToolNodeIds::PartQuality_4 => Enums\PartQuality::class,
            MachineToolNodeIds::ProcessIrregularity_4 => Enums\ProcessIrregularity::class,
            MachineToolNodeIds::ToolLifeIndication => Enums\ToolLifeIndication::class,
            MachineToolNodeIds::ToolLocked => Enums\ToolLocked::class,
            MachineToolNodeIds::ToolManagement => Enums\ToolManagement::class,
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
            new \PhpOpcua\Nodeset\IA\IARegistrar(),
        ];
    }
}
