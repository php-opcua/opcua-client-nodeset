<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterUnsignedRange;

/**
 * Codec for the BACnetEventParameterUnsignedRange structured data type.
 *
 * @generated
 */
class BACnetEventParameterUnsignedRangeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterUnsignedRange
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterUnsignedRange
    {
        return new BACnetEventParameterUnsignedRange(
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
    }
}
