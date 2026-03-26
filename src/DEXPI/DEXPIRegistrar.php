<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DEXPI;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class DEXPIRegistrar implements GeneratedTypeRegistrar
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
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            DEXPINodeIds::SiphonClassification => Enums\SiphonClassification::class,
            DEXPINodeIds::PipingNetworkSegmentFlowClassification => Enums\PipingNetworkSegmentFlowClassification::class,
            DEXPINodeIds::GuaranteedSupplyFunctionClassification => Enums\GuaranteedSupplyFunctionClassification::class,
            DEXPINodeIds::FireResistantArtefactClassification => Enums\FireResistantArtefactClassification::class,
            DEXPINodeIds::OnHoldClassification => Enums\OnHoldClassification::class,
            DEXPINodeIds::QualityRelevanceClassification => Enums\QualityRelevanceClassification::class,
            DEXPINodeIds::ConfidentialityClassification => Enums\ConfidentialityClassification::class,
            DEXPINodeIds::ExplosionProofArtefactClassification => Enums\ExplosionProofArtefactClassification::class,
            DEXPINodeIds::PipingClassBreakClassification => Enums\PipingClassBreakClassification::class,
            DEXPINodeIds::NominalPressureStandardClassification => Enums\NominalPressureStandardClassification::class,
            DEXPINodeIds::GmpRelevanceClassification => Enums\GmpRelevanceClassification::class,
            DEXPINodeIds::NumberOfPortsClassification => Enums\NumberOfPortsClassification::class,
            DEXPINodeIds::DetonationProofArtefactClassification => Enums\DetonationProofArtefactClassification::class,
            DEXPINodeIds::CompositionBreakClassification => Enums\CompositionBreakClassification::class,
            DEXPINodeIds::NodeFlowClassification => Enums\NodeFlowClassification::class,
            DEXPINodeIds::InsulationBreakClassification => Enums\InsulationBreakClassification::class,
            DEXPINodeIds::NominalDiameterStandardClassification => Enums\NominalDiameterStandardClassification::class,
            DEXPINodeIds::PipingNetworkSegmentSlopeClassification => Enums\PipingNetworkSegmentSlopeClassification::class,
            DEXPINodeIds::PipingClassArtefactClassification => Enums\PipingClassArtefactClassification::class,
            DEXPINodeIds::HeatTracingTypeClassification => Enums\HeatTracingTypeClassification::class,
            DEXPINodeIds::SignalConveyingTypeClassification => Enums\SignalConveyingTypeClassification::class,
            DEXPINodeIds::PrimarySecondaryPipingNetworkSegmentClassification => Enums\PrimarySecondaryPipingNetworkSegmentClassification::class,
            DEXPINodeIds::ChamberFunctionClassification => Enums\ChamberFunctionClassification::class,
            DEXPINodeIds::OperationClassification => Enums\OperationClassification::class,
            DEXPINodeIds::NominalDiameterBreakClassification => Enums\NominalDiameterBreakClassification::class,
            DEXPINodeIds::FailActionClassification => Enums\FailActionClassification::class,
            DEXPINodeIds::JacketedPipeClassification => Enums\JacketedPipeClassification::class,
            DEXPINodeIds::LocationClassification => Enums\LocationClassification::class,
            DEXPINodeIds::PortStatusClassification => Enums\PortStatusClassification::class,
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
