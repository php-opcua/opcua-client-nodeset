<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class MachineVisionRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::BinaryIdBaseDataType_3), new Codecs\BinaryIdBaseDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::ConfigurationDataType_3), new Codecs\ConfigurationDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::ConfigurationTransferOptions_3), new Codecs\ConfigurationTransferOptionsCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::JobIdDataType_3), new Codecs\JobIdDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::MeasIdDataType_3), new Codecs\MeasIdDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::PartIdDataType_3), new Codecs\PartIdDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::ProcessingTimesDataType_3), new Codecs\ProcessingTimesDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::ProductDataType_3), new Codecs\ProductDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::ProductIdDataType_3), new Codecs\ProductIdDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::RecipeTransferOptions_3), new Codecs\RecipeTransferOptionsCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::ResultDataType_3), new Codecs\ResultDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::ResultIdDataType_3), new Codecs\ResultIdDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::ResultTransferOptions_3), new Codecs\ResultTransferOptionsCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(MachineVisionNodeIds::SystemStateDescriptionDataType_3), new Codecs\SystemStateDescriptionDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            MachineVisionNodeIds::SystemStateDataType => Enums\SystemStateDataType::class,
            MachineVisionNodeIds::TriStateBooleanDataType => Enums\TriStateBooleanDataType::class,
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