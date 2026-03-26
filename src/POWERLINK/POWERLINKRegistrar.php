<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class POWERLINKRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(POWERLINKNodeIds::PowerlinkErrorEntryDataType_3), new Codecs\PowerlinkErrorEntryDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(POWERLINKNodeIds::PowerlinkIpAddressDataType_3), new Codecs\PowerlinkIpAddressDataTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(POWERLINKNodeIds::PowerlinkPDOMappingEntryDataType_3), new Codecs\PowerlinkPDOMappingEntryDataTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            POWERLINKNodeIds::PowerlinkNMTResetCmdEnumeration => Enums\PowerlinkNMTResetCmdEnumeration::class,
            POWERLINKNodeIds::PowerlinkNMTStateEnumeration => Enums\PowerlinkNMTStateEnumeration::class,
            POWERLINKNodeIds::ErrorRegisterBits_3 => Enums\ErrorRegisterBits::class,
            POWERLINKNodeIds::PowerlinkAttribute_3 => Enums\PowerlinkAttribute::class,
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