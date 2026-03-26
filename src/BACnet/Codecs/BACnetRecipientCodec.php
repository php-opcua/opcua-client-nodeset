<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetRecipient;

/**
 * Codec for the BACnetRecipient structured data type.
 *
 * @generated
 */
class BACnetRecipientCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetRecipient
     */
    public function decode(BinaryDecoder $decoder): BACnetRecipient
    {
        return new BACnetRecipient(
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
        $encoder->writeExtensionObject($value->Device);
        $encoder->writeExtensionObject($value->Address);
    }
}