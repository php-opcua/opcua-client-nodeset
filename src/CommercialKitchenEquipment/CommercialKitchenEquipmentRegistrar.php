<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CommercialKitchenEquipment;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class CommercialKitchenEquipmentRegistrar implements GeneratedTypeRegistrar
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
            CommercialKitchenEquipmentNodeIds::BeverageSMLEnumeration => Enums\BeverageSMLEnumeration::class,
            CommercialKitchenEquipmentNodeIds::ChamberModeEnumeration => Enums\ChamberModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::CoffeeMachineModeEnumeration => Enums\CoffeeMachineModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::CombiSteamerModeEnumeration => Enums\CombiSteamerModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::CookingKettleModeEnumeration => Enums\CookingKettleModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::CurrentStateEnumeration => Enums\CurrentStateEnumeration::class,
            CommercialKitchenEquipmentNodeIds::EnergySourceEnumeration => Enums\EnergySourceEnumeration::class,
            CommercialKitchenEquipmentNodeIds::FryerModeEnumeration => Enums\FryerModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::FryingPanModeEnumeration => Enums\FryingPanModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::GrillingZoneStateEnumeration => Enums\GrillingZoneStateEnumeration::class,
            CommercialKitchenEquipmentNodeIds::HygieneModeEnumeration => Enums\HygieneModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::MultiFunctionPanModeEnumeration => Enums\MultiFunctionPanModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::OperatingModeEnumeration => Enums\OperatingModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::OperationModeEnumeration => Enums\OperationModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::PastaCookerModeEnumeration => Enums\PastaCookerModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::PlatenPositionStateEnumeration => Enums\PlatenPositionStateEnumeration::class,
            CommercialKitchenEquipmentNodeIds::PressureCookingKettleModeEnumeration => Enums\PressureCookingKettleModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::ProgramModeEnumeration => Enums\ProgramModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::SignalModeEnumeration => Enums\SignalModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::SpecialCookingModeEnumeration => Enums\SpecialCookingModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::SpecialFunctionModeEnumeration => Enums\SpecialFunctionModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::StatusEnumeration => Enums\StatusEnumeration::class,
            CommercialKitchenEquipmentNodeIds::TrayModeEnumeration => Enums\TrayModeEnumeration::class,
            CommercialKitchenEquipmentNodeIds::TrayTypeEnumeration => Enums\TrayTypeEnumeration::class,
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
