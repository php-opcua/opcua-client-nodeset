<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetDeviceObjectPropertyReference;

/**
 * Codec for the BACnetDeviceObjectPropertyReference structured data type.
 *
 * @generated
 */
class BACnetDeviceObjectPropertyReferenceCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetDeviceObjectPropertyReference
     */
    public function decode(BinaryDecoder $decoder): BACnetDeviceObjectPropertyReference
    {
        return new BACnetDeviceObjectPropertyReference(
            $decoder->readExtensionObject(),
            Enums\BACnetPropertyIdentifier::from($decoder->readInt32()),
            $decoder->readUInt32(),
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
        $encoder->writeExtensionObject($value->ObjectIdentifier);
        $encoder->writeInt32($value->PropertyIdentifier->value);
        $encoder->writeUInt32($value->PropertyArrayIndex);
        $encoder->writeExtensionObject($value->DeviceIdentifier);
    }
}
