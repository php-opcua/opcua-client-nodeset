<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterUnsignedOutOfRange;

/**
 * Codec for the BACnetEventParameterUnsignedOutOfRange structured data type.
 *
 * @generated
 */
class BACnetEventParameterUnsignedOutOfRangeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterUnsignedOutOfRange
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterUnsignedOutOfRange
    {
        return new BACnetEventParameterUnsignedOutOfRange(
            $decoder->readUInt32(),
            $decoder->readUInt32(),
            $decoder->readUInt32(),
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
        $encoder->writeUInt32($value->Low_limit);
        $encoder->writeUInt32($value->High_limit);
        $encoder->writeUInt32($value->Deadband);
    }
}