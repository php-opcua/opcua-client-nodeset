<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MDIS;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class OpcMDISRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OpcMDISNodeIds::MDISVersionDataType_3), new Codecs\MDISVersionDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            OpcMDISNodeIds::ArbitrationModeEnum => Enums\ArbitrationModeEnum::class,
            OpcMDISNodeIds::ChokeCommandEnum => Enums\ChokeCommandEnum::class,
            OpcMDISNodeIds::ChokeMoveEnum => Enums\ChokeMoveEnum::class,
            OpcMDISNodeIds::CIMVMoveEnum => Enums\CIMVMoveEnum::class,
            OpcMDISNodeIds::CIMVOperationModeEnum => Enums\CIMVOperationModeEnum::class,
            OpcMDISNodeIds::CommandEnum => Enums\CommandEnum::class,
            OpcMDISNodeIds::MotorOperationEnum => Enums\MotorOperationEnum::class,
            OpcMDISNodeIds::MotorStateEnum => Enums\MotorStateEnum::class,
            OpcMDISNodeIds::SEMEnum => Enums\SEMEnum::class,
            OpcMDISNodeIds::SetCalculatedPositionEnum => Enums\SetCalculatedPositionEnum::class,
            OpcMDISNodeIds::SignatureStatusEnum => Enums\SignatureStatusEnum::class,
            OpcMDISNodeIds::ValvePositionEnum => Enums\ValvePositionEnum::class,
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
