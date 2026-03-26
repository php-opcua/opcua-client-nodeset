<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class AutoIDRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::AccessResult_5), new Codecs\AccessResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::RfidAccessResult_3), new Codecs\RfidAccessResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::AntennaNameIdPair_3), new Codecs\AntennaNameIdPairCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::DhcpGeoConfCoordinate_3), new Codecs\DhcpGeoConfCoordinateCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::LocalCoordinate_3), new Codecs\LocalCoordinateCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::Position_3), new Codecs\PositionCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::RfidSighting_3), new Codecs\RfidSightingCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::Rotation_3), new Codecs\RotationCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::ScanDataEpc_3), new Codecs\ScanDataEpcCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::ScanResult_9), new Codecs\ScanResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::OcrScanResult_3), new Codecs\OcrScanResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::OpticalScanResult_3), new Codecs\OpticalScanResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::OpticalVerifierScanResult_3), new Codecs\OpticalVerifierScanResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::RfidScanResult_3), new Codecs\RfidScanResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::RtlsLocationResult_3), new Codecs\RtlsLocationResultCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::ScanSettings_4), new Codecs\ScanSettingsCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::Location_3), new Codecs\LocationCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::ScanData_3), new Codecs\ScanDataCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(AutoIDNodeIds::WGS84Coordinate_3), new Codecs\WGS84CoordinateCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            AutoIDNodeIds::AutoIdOperationStatusEnumeration => Enums\AutoIdOperationStatusEnumeration::class,
            AutoIDNodeIds::DeviceStatusEnumeration => Enums\DeviceStatusEnumeration::class,
            AutoIDNodeIds::LocationTypeEnumeration => Enums\LocationTypeEnumeration::class,
            AutoIDNodeIds::RfidLockOperationEnumeration => Enums\RfidLockOperationEnumeration::class,
            AutoIDNodeIds::RfidLockRegionEnumeration => Enums\RfidLockRegionEnumeration::class,
            AutoIDNodeIds::RfidPasswordTypeEnumeration => Enums\RfidPasswordTypeEnumeration::class,
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
