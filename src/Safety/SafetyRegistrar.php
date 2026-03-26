<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Safety;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class SafetyRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SafetyNodeIds::NonSafetyDataPlaceholderDataType), new Codecs\NonSafetyDataPlaceholderDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SafetyNodeIds::RequestSPDUDataType), new Codecs\RequestSPDUDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SafetyNodeIds::ResponseSPDUDataType), new Codecs\ResponseSPDUDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            SafetyNodeIds::InFlagsType => Enums\InFlagsType::class,
            SafetyNodeIds::OutFlagsType => Enums\OutFlagsType::class,
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