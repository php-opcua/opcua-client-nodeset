<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\LADS;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class LADSRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(LADSNodeIds::Default_XML_2), new Codecs\KeyValueTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(LADSNodeIds::Default_XML), new Codecs\SampleInfoTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            LADSNodeIds::MaintenanceTaskResultEnum => Enums\MaintenanceTaskResultEnum::class,
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\DI\DIRegistrar(),
            new \PhpOpcua\Nodeset\AMB\AMBRegistrar(),
            new \PhpOpcua\Nodeset\Machinery\MachineryRegistrar(),
        ];
    }
}
