<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetAddressBinding;

/**
 * Codec for the BACnetAddressBinding structured data type.
 *
 * @generated
 */
class BACnetAddressBindingCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetAddressBinding
     */
    public function decode(BinaryDecoder $decoder): BACnetAddressBinding
    {
        return new BACnetAddressBinding(
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
        $encoder->writeExtensionObject($value->DeviceObjectIdentifier);
        $encoder->writeExtensionObject($value->DeviceAddress);
    }
}
