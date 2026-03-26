<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\DI\Types\TransferResultDataDataType;

/**
 * Codec for the TransferResultDataDataType structured data type.
 *
 * @generated
 */
class TransferResultDataDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return TransferResultDataDataType
     */
    public function decode(BinaryDecoder $decoder): TransferResultDataDataType
    {
        return new TransferResultDataDataType(
            $decoder->readInt32(),
            $decoder->readBoolean(),
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
        $encoder->writeInt32($value->SequenceNumber);
        $encoder->writeBoolean($value->EndOfResults);
        $this->writeArray($encoder, $value->ParameterDefs, fn ($item) => $encoder->writeExtensionObject($item));
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