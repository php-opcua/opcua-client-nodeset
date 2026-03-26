<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PAEFS;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class PAEFSRegistrar implements GeneratedTypeRegistrar
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
            PAEFSNodeIds::AirConnectionOpenEnum => Enums\AirConnectionOpenEnum::class,
            PAEFSNodeIds::AnalogDigitalEnum => Enums\AnalogDigitalEnum::class,
            PAEFSNodeIds::ControlModeEnum => Enums\ControlModeEnum::class,
            PAEFSNodeIds::FilterAidDeviceStatusEnum => Enums\FilterAidDeviceStatusEnum::class,
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
            new \PhpOpcua\Nodeset\PADIM\PADIMRegistrar(),
        ];
    }
}
