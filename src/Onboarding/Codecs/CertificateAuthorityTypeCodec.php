<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Onboarding\Types\CertificateAuthorityType;

/**
 * Codec for the CertificateAuthorityType structured data type.
 *
 * @generated
 */
class CertificateAuthorityTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return CertificateAuthorityType
     */
    public function decode(BinaryDecoder $decoder): CertificateAuthorityType
    {
        return new CertificateAuthorityType(
            $decoder->readByteString(),
            $this->readArray($decoder, fn () => $decoder->readByteString()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeByteString($value->AuthorityCertificate);
        $this->writeArray($encoder, $value->IssuerCertificates, fn ($item) => $encoder->writeByteString($item));
    }

    private function readArray(BinaryDecoder $decoder, callable $readItem): array
    {
        $count = $decoder->readInt32();
        $items = [];
        for ($i = 0; $i < $count; $i++) {
            $items[] = $readItem();
        }

        return $items;
    }

    private function writeArray(BinaryEncoder $encoder, array $items, callable $writeItem): void
    {
        $encoder->writeInt32(count($items));
        foreach ($items as $item) {
            $writeItem($item);
        }
    }
}
