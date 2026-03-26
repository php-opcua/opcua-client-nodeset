<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\LADS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\LADS\Types\KeyValueType;

/**
 * Codec for the KeyValueType structured data type.
 *
 * @generated
 */
class KeyValueTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return KeyValueType
     */
    public function decode(BinaryDecoder $decoder): KeyValueType
    {
        return new KeyValueType(
            $decoder->readString(),
            $decoder->readString(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->Key);
        $encoder->writeString($value->Value);
    }
}