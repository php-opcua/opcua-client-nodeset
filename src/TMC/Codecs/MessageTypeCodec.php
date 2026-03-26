<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\MessageType;

/**
 * Codec for the MessageType structured data type.
 *
 * @generated
 */
class MessageTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MessageType
     */
    public function decode(BinaryDecoder $decoder): MessageType
    {
        return new MessageType(
            $decoder->readString(),
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
        $encoder->writeString($value->ID);
        $encoder->writeLocalizedText($value->LocalText);
    }
}