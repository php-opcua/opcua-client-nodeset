<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\RootCauseMessageType;

/**
 * Codec for the RootCauseMessageType structured data type.
 *
 * @generated
 */
class RootCauseMessageTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RootCauseMessageType
     */
    public function decode(BinaryDecoder $decoder): RootCauseMessageType
    {
        return new RootCauseMessageType(
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
        $encoder->writeString($value->GroupID);
    }
}