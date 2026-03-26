<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\I4AAS;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class I4AASRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(I4AASNodeIds::AASKeyDataType_3), new Codecs\AASKeyDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            I4AASNodeIds::AASAssetKindDataType => Enums\AASAssetKindDataType::class,
            I4AASNodeIds::AASCategoryDataType => Enums\AASCategoryDataType::class,
            I4AASNodeIds::AASDataTypeIEC61360DataType => Enums\AASDataTypeIEC61360DataType::class,
            I4AASNodeIds::AASEntityTypeDataType => Enums\AASEntityTypeDataType::class,
            I4AASNodeIds::AASIdentifierTypeDataType => Enums\AASIdentifierTypeDataType::class,
            I4AASNodeIds::AASKeyElementsDataType => Enums\AASKeyElementsDataType::class,
            I4AASNodeIds::AASKeyTypeDataType => Enums\AASKeyTypeDataType::class,
            I4AASNodeIds::AASLevelTypeDataType => Enums\AASLevelTypeDataType::class,
            I4AASNodeIds::AASModelingKindDataType => Enums\AASModelingKindDataType::class,
            I4AASNodeIds::AASValueTypeDataType => Enums\AASValueTypeDataType::class,
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
