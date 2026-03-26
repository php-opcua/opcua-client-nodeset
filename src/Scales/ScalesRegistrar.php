<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class ScalesRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ScalesNodeIds::PrintableWeightType_3), new Codecs\PrintableWeightTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ScalesNodeIds::WeightType_3), new Codecs\WeightTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ScalesNodeIds::RecipeReportElementType_3), new Codecs\RecipeReportElementTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ScalesNodeIds::RecipeTargetValueType_3), new Codecs\RecipeTargetValueTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(ScalesNodeIds::RecipeThresholdType_3), new Codecs\RecipeThresholdTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            ScalesNodeIds::DraftShieldType => Enums\DraftShieldType::class,
            ScalesNodeIds::EdgeOperator => Enums\EdgeOperator::class,
            ScalesNodeIds::EqualityAndRelationalOperator => Enums\EqualityAndRelationalOperator::class,
            ScalesNodeIds::RateControlMode_2 => Enums\RateControlMode::class,
            ScalesNodeIds::TareMode_20 => Enums\TareMode::class,
            ScalesNodeIds::ToleranceState_2 => Enums\ToleranceState::class,
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
            new \PhpOpcua\Nodeset\PackML\PackMLRegistrar(),
        ];
    }
}