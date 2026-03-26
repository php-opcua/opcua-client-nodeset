<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class FDTNodeSetRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(FDTNodeSetNodeIds::DataRefType_3), new Codecs\DataRefTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(FDTNodeSetNodeIds::FdtDeviceClassificationType_3), new Codecs\FdtDeviceClassificationTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(FDTNodeSetNodeIds::SemanticInfoType_3), new Codecs\SemanticInfoTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            FDTNodeSetNodeIds::AlarmType_2 => Enums\AlarmType::class,
            FDTNodeSetNodeIds::ApplicationIdEnumeration => Enums\ApplicationIdEnumeration::class,
            FDTNodeSetNodeIds::ClassificationDomainId => Enums\ClassificationDomainId::class,
            FDTNodeSetNodeIds::ClassificationId => Enums\ClassificationId::class,
            FDTNodeSetNodeIds::DocumentClassification => Enums\DocumentClassification::class,
            FDTNodeSetNodeIds::FunctionExecutionResultState => Enums\FunctionExecutionResultState::class,
            FDTNodeSetNodeIds::IECDatatype_2 => Enums\IECDatatype::class,
            FDTNodeSetNodeIds::RangeType_2 => Enums\RangeType::class,
            FDTNodeSetNodeIds::SignalTypeEnumeration => Enums\SignalTypeEnumeration::class,
            FDTNodeSetNodeIds::SubstitutionType_2 => Enums\SubstitutionType::class,
            FDTNodeSetNodeIds::SupportedTransfer_2 => Enums\SupportedTransfer::class,
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