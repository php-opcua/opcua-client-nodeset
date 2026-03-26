<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetTimeValueValue;

/**
 * Codec for the BACnetTimeValueValue structured data type.
 *
 * @generated
 */
class BACnetTimeValueValueCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetTimeValueValue
     */
    public function decode(BinaryDecoder $decoder): BACnetTimeValueValue
    {
        return new BACnetTimeValueValue(
            $decoder->readBoolean(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readByteString(),
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $decoder->readInt32(),
            $decoder->readExtensionObject(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeBoolean($value->BooleanValue);
        $encoder->writeExtensionObject($value->UnsignedValue);
        $encoder->writeExtensionObject($value->SignedValue);
        $encoder->writeByteString($value->OctedStringValue);
        $encoder->writeString($value->CharStringValue);
        $encoder->writeExtensionObject($value->ObjectIdentifierValue);
        $encoder->writeInt32($value->EnumerationValue);
        $encoder->writeExtensionObject($value->BitStringValue);
    }
}
