<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MTConnect\Types\MessageDataType;

/**
 * Codec for the MessageDataType structured data type.
 *
 * @generated
 */
class MessageDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MessageDataType
     */
    public function decode(BinaryDecoder $decoder): MessageDataType
    {
        return new MessageDataType(
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
        $encoder->writeString($value->NativeCode);
        $encoder->writeString($value->Text);
    }
}
