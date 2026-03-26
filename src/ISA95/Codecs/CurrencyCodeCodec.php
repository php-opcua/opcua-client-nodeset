<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\ISA95\Types\CurrencyCode;

/**
 * Codec for the CurrencyCode structured data type.
 *
 * @generated
 */
class CurrencyCodeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return CurrencyCode
     */
    public function decode(BinaryDecoder $decoder): CurrencyCode
    {
        return new CurrencyCode(
            $decoder->readString(),
            $decoder->readInt32(),
            $this->readArray($decoder, fn () => $decoder->readByte()),
            $decoder->readLocalizedText(),
            $decoder->readLocalizedText(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->namespaceUri);
        $encoder->writeInt32($value->unitId);
        $this->writeArray($encoder, $value->charId, fn ($item) => $encoder->writeByte($item));
        $encoder->writeLocalizedText($value->displayName);
        $encoder->writeLocalizedText($value->Description);
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
