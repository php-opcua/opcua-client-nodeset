<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetTimeStamp;

/**
 * Codec for the BACnetTimeStamp structured data type.
 *
 * @generated
 */
class BACnetTimeStampCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetTimeStamp
     */
    public function decode(BinaryDecoder $decoder): BACnetTimeStamp
    {
        return new BACnetTimeStamp(
            $decoder->readExtensionObject(),
            $decoder->readUInt16(),
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
        $encoder->writeExtensionObject($value->Time);
        $encoder->writeUInt16($value->SequenceNumber);
        $encoder->writeExtensionObject($value->DateTime);
    }
}
