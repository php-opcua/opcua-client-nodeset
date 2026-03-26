<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetTimeValue;

/**
 * Codec for the BACnetTimeValue structured data type.
 *
 * @generated
 */
class BACnetTimeValueCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetTimeValue
     */
    public function decode(BinaryDecoder $decoder): BACnetTimeValue
    {
        return new BACnetTimeValue(
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->Value);
    }
}