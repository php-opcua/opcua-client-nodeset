<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterFloatingLimit;

/**
 * Codec for the BACnetEventParameterFloatingLimit structured data type.
 *
 * @generated
 */
class BACnetEventParameterFloatingLimitCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterFloatingLimit
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterFloatingLimit
    {
        return new BACnetEventParameterFloatingLimit(
            $decoder->readUInt32(),
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->Setpoint_reference);
        $encoder->writeDouble($value->Low_diff_limit);
        $encoder->writeDouble($value->High_diff_limit);
        $encoder->writeDouble($value->Deadband);
    }
}