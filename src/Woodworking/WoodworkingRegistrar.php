<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Woodworking;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class WoodworkingRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(WoodworkingNodeIds::WwMessageArgumentDataType_3), new Codecs\WwMessageArgumentDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(WoodworkingNodeIds::WwMessageArgumentValueDataType_3), new Codecs\WwMessageArgumentValueDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            WoodworkingNodeIds::WwEventCategoryEnumeration => Enums\WwEventCategoryEnumeration::class,
            WoodworkingNodeIds::WwUnitModeEnumeration => Enums\WwUnitModeEnumeration::class,
            WoodworkingNodeIds::WwUnitStateEnumeration => Enums\WwUnitStateEnumeration::class,
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
