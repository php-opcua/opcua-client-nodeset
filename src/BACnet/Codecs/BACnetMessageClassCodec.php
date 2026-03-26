<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetMessageClass;

/**
 * Codec for the BACnetMessageClass structured data type.
 *
 * @generated
 */
class BACnetMessageClassCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetMessageClass
     */
    public function decode(BinaryDecoder $decoder): BACnetMessageClass
    {
        return new BACnetMessageClass(
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->Unsigned);
        $encoder->writeString($value->String);
    }
}
