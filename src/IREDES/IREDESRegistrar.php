<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class IREDESRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(IREDESNodeIds::Default_XML), new Codecs\IRLengthDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(IREDESNodeIds::Default_XML_2), new Codecs\JobAssignmentTimeDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            IREDESNodeIds::Answer_13 => Enums\Answer::class,
            IREDESNodeIds::DispFlag_2 => Enums\DispFlag::class,
            IREDESNodeIds::LTPPMaction_3 => Enums\LTPPMaction::class,
            IREDESNodeIds::LTPPMptFromType_2 => Enums\LTPPMptFromType::class,
            IREDESNodeIds::LTPPMptToType_2 => Enums\LTPPMptToType::class,
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
