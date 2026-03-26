<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class Fdi5Registrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(Fdi5NodeIds::RegistrationParameters_3), new Codecs\RegistrationParametersCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(Fdi5NodeIds::RegisteredNode_3), new Codecs\RegisteredNodeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(Fdi5NodeIds::RegisterNodesResult_3), new Codecs\RegisterNodesResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(Fdi5NodeIds::TransferIncident_3), new Codecs\TransferIncidentCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(Fdi5NodeIds::ApplyResult_3), new Codecs\ApplyResultCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            Fdi5NodeIds::WindowModeType => Enums\WindowModeType::class,
            Fdi5NodeIds::StyleType => Enums\StyleType::class,
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