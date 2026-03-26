<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Robotics;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class RoboticsRegistrar implements GeneratedTypeRegistrar
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
            RoboticsNodeIds::AxisMotionProfileEnumeration => Enums\AxisMotionProfileEnumeration::class,
            RoboticsNodeIds::ExecutionModeEnumeration => Enums\ExecutionModeEnumeration::class,
            RoboticsNodeIds::MotionDeviceCategoryEnumeration => Enums\MotionDeviceCategoryEnumeration::class,
            RoboticsNodeIds::OperationalModeEnumeration => Enums\OperationalModeEnumeration::class,
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
