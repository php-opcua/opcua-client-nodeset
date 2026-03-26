<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Types;

/**
 * DTO for the CertificateAuthorityType structured data type.
 *
 * @generated
 */
readonly class CertificateAuthorityType
{
    public function __construct(
        public string $AuthorityCertificate,
        public array $IssuerCertificates,
    ) {
    }
}