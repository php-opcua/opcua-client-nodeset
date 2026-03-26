<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterSignedOutOfRange;

/**
 * Codec for the BACnetEventParameterSignedOutOfRange structured data type.
 *
 * @generated
 */
class BACnetEventParameterSignedOutOfRangeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterSignedOutOfRange
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterSignedOutOfRange
    {
        return new BACnetEventParameterSignedOutOfRange(
            $decoder->readUInt32(),
            $decoder->readInt32(),
            $decoder->readInt32(),
            $decoder->readUInt32(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt32($value->Time_delay);
        $encoder->writeInt32($value->Low_limit);
        $encoder->writeInt32($value->High_limit);
        $encoder->writeUInt32($value->Deadband);
    }
}
