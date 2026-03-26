<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CranesHoists;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class CranesHoistsRegistrar implements GeneratedTypeRegistrar
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
            CranesHoistsNodeIds::CraneOperationalModeEnum => Enums\CraneOperationalModeEnum::class,
            CranesHoistsNodeIds::ExternalControlRequestEnum => Enums\ExternalControlRequestEnum::class,
            CranesHoistsNodeIds::ProtectiveFunctionEnum => Enums\ProtectiveFunctionEnum::class,
            CranesHoistsNodeIds::CraneMotionDeviceCategoryEnum => Enums\CraneMotionDeviceCategoryEnum::class,
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
            new \PhpOpcua\Nodeset\Robotics\RoboticsRegistrar(),
        ];
    }
}
