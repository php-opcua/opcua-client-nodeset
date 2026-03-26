<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterDoubleOutOfRange;

/**
 * Codec for the BACnetEventParameterDoubleOutOfRange structured data type.
 *
 * @generated
 */
class BACnetEventParameterDoubleOutOfRangeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterDoubleOutOfRange
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterDoubleOutOfRange
    {
        return new BACnetEventParameterDoubleOutOfRange(
            $decoder->readUInt32(),
            $decoder->readDouble(),
            $decoder->readDouble(),
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
        $encoder->writeUInt32($value->Time_delay);
        $encoder->writeDouble($value->Low_limit);
        $encoder->writeDouble($value->High_limit);
        $encoder->writeDouble($value->Deadband);
    }
}