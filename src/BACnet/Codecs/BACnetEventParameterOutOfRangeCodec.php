<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterOutOfRange;

/**
 * Codec for the BACnetEventParameterOutOfRange structured data type.
 *
 * @generated
 */
class BACnetEventParameterOutOfRangeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterOutOfRange
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterOutOfRange
    {
        return new BACnetEventParameterOutOfRange(
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
