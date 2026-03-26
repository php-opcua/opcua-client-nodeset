<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetPriorityValue;

/**
 * Codec for the BACnetPriorityValue structured data type.
 *
 * @generated
 */
class BACnetPriorityValueCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetPriorityValue
     */
    public function decode(BinaryDecoder $decoder): BACnetPriorityValue
    {
        return new BACnetPriorityValue(
            $decoder->readFloat(),
            $decoder->readInt32(),
            $decoder->readExtensionObject(),
            $decoder->readBoolean(),
            $decoder->readExtensionObject(),
            $decoder->readDouble(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeFloat($value->Real);
        $encoder->writeInt32($value->Enumerated);
        $encoder->writeExtensionObject($value->Unsigned);
        $encoder->writeBoolean($value->Boolean);
        $encoder->writeExtensionObject($value->Signed);
        $encoder->writeDouble($value->Double);
    }
}