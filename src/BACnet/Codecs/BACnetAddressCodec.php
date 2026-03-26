<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetAddress;

/**
 * Codec for the BACnetAddress structured data type.
 *
 * @generated
 */
class BACnetAddressCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetAddress
     */
    public function decode(BinaryDecoder $decoder): BACnetAddress
    {
        return new BACnetAddress(
            $decoder->readUInt16(),
            $decoder->readByteString(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt16($value->NetworkNumber);
        $encoder->writeByteString($value->MacAddress);
    }
}
