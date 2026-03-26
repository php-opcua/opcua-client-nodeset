<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class OnboardingRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OnboardingNodeIds::CertificateAuthorityType_3), new Codecs\CertificateAuthorityTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OnboardingNodeIds::BaseTicketType_3), new Codecs\BaseTicketTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OnboardingNodeIds::DeviceIdentityTicketType_3), new Codecs\DeviceIdentityTicketTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OnboardingNodeIds::CompositeIdentityTicketType_3), new Codecs\CompositeIdentityTicketTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OnboardingNodeIds::TicketListType_3), new Codecs\TicketListTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(OnboardingNodeIds::ManagerDescription_3), new Codecs\ManagerDescriptionCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\GDS\GDSRegistrar(),
        ];
    }
}
