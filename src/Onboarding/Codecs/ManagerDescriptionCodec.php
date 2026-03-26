<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Onboarding\Types\ManagerDescription;

/**
 * Codec for the ManagerDescription structured data type.
 *
 * @generated
 */
class ManagerDescriptionCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ManagerDescription
     */
    public function decode(BinaryDecoder $decoder): ManagerDescription
    {
        return new ManagerDescription(
            $decoder->readLocalizedText(),
            $decoder->readBoolean(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $this->readArray($decoder, fn () => $decoder->readString()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeLocalizedText($value->Name);
        $encoder->writeBoolean($value->IsRequired);
        $encoder->writeExtensionObject($value->PurposeUri);
        $encoder->writeExtensionObject($value->ProtocolUri);
        $this->writeArray($encoder, $value->EndpointUrls, fn ($item) => $encoder->writeString($item));
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