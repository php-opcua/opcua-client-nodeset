<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Onboarding\Types\CompositeIdentityTicketType;

/**
 * Codec for the CompositeIdentityTicketType structured data type.
 *
 * @generated
 */
class CompositeIdentityTicketTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return CompositeIdentityTicketType
     */
    public function decode(BinaryDecoder $decoder): CompositeIdentityTicketType
    {
        return new CompositeIdentityTicketType(
            $decoder->readExtensionObject(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeExtensionObject($value->CompositeInstanceUri);
        $this->writeArray($encoder, $value->Devices, fn ($item) => $encoder->writeExtensionObject($item));
        $this->writeArray($encoder, $value->Composites, fn ($item) => $encoder->writeExtensionObject($item));
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