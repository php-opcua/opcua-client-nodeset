<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class TMCRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::DataDescriptionType), new Codecs\DataDescriptionTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::DataDefinitionType_3), new Codecs\DataDefinitionTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::DataValueType_3), new Codecs\DataValueTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::DataSetDefinitionType_3), new Codecs\DataSetDefinitionTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::DataSetEntryType_3), new Codecs\DataSetEntryTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::DataSetType_3), new Codecs\DataSetTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MaterialDefinitionType_3), new Codecs\MaterialDefinitionTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MaterialListItemType_3), new Codecs\MaterialListItemTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MaterialListType_3), new Codecs\MaterialListTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MaterialLotType_3), new Codecs\MaterialLotTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MaterialPointType_3), new Codecs\MaterialPointTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MaterialStorageBufferDataType_3), new Codecs\MaterialStorageBufferDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MaterialSublotType_3), new Codecs\MaterialSublotTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MessageType_3), new Codecs\MessageTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::RootCauseMessageType_3), new Codecs\RootCauseMessageTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::MethodExecutionFeedbackType_3), new Codecs\MethodExecutionFeedbackTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::ProductionOrderHeaderType_3), new Codecs\ProductionOrderHeaderTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::ProductionOrderType), new Codecs\ProductionOrderTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::OrchestrationProductionOrderType_3), new Codecs\OrchestrationProductionOrderTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(TMCNodeIds::RootCauseGroupType_3), new Codecs\RootCauseGroupTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            TMCNodeIds::CommandEnumeration => Enums\CommandEnumeration::class,
            TMCNodeIds::ControlModeEnumeration => Enums\ControlModeEnumeration::class,
            TMCNodeIds::MaterialIntegrityAgentEnumeration => Enums\MaterialIntegrityAgentEnumeration::class,
            TMCNodeIds::MaterialStockStatusEnumeration => Enums\MaterialStockStatusEnumeration::class,
            TMCNodeIds::MaterialValidationStatusEnumeration => Enums\MaterialValidationStatusEnumeration::class,
            TMCNodeIds::MotorDirectionEnumeration => Enums\MotorDirectionEnumeration::class,
            TMCNodeIds::ParameterDependencyEnumeration => Enums\ParameterDependencyEnumeration::class,
            TMCNodeIds::ProductionStatusEnumeration => Enums\ProductionStatusEnumeration::class,
            TMCNodeIds::StateEnumeration => Enums\StateEnumeration::class,
            TMCNodeIds::StorageLogicEnumeration => Enums\StorageLogicEnumeration::class,
            TMCNodeIds::StorageMixingLogicEnumeration => Enums\StorageMixingLogicEnumeration::class,
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\DI\DIRegistrar(),
            new \PhpOpcua\Nodeset\PackML\PackMLRegistrar(),
        ];
    }
}
