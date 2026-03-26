<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IA;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class IARegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(IANodeIds::RGBWDataType_3), new Codecs\RGBWDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            IANodeIds::LevelDisplayMode => Enums\LevelDisplayMode::class,
            IANodeIds::SignalColor_2 => Enums\SignalColor::class,
            IANodeIds::SignalModeLight => Enums\SignalModeLight::class,
            IANodeIds::StacklightOperationMode => Enums\StacklightOperationMode::class,
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