<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MetalForming;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class MetalFormingRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MetalFormingNodeIds::CyclicPartInformationDataType), new Codecs\CyclicPartInformationDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MetalFormingNodeIds::CyclicProcessValueDataType), new Codecs\CyclicProcessValueDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
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
            new \PhpOpcua\Nodeset\Machinery\MachineryRegistrar(),
            new \PhpOpcua\Nodeset\PADIM\PADIMRegistrar(),
            new \PhpOpcua\Nodeset\MachineTool\MachineToolRegistrar(),
        ];
    }
}
