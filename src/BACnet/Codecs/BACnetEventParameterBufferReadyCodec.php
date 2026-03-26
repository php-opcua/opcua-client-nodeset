<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterBufferReady;

/**
 * Codec for the BACnetEventParameterBufferReady structured data type.
 *
 * @generated
 */
class BACnetEventParameterBufferReadyCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterBufferReady
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterBufferReady
    {
        return new BACnetEventParameterBufferReady(
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
        $encoder->writeUInt32($value->Notification_threshold);
        $encoder->writeUInt32($value->Previous_notification_count);
    }
}