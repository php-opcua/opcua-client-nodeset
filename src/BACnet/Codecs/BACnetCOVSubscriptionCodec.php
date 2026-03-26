<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetCOVSubscription;

/**
 * Codec for the BACnetCOVSubscription structured data type.
 *
 * @generated
 */
class BACnetCOVSubscriptionCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetCOVSubscription
     */
    public function decode(BinaryDecoder $decoder): BACnetCOVSubscription
    {
        return new BACnetCOVSubscription(
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readBoolean(),
            $decoder->readUInt32(),
            $decoder->readFloat(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeExtensionObject($value->Recipient);
        $encoder->writeExtensionObject($value->MonitoredPropertyReference);
        $encoder->writeBoolean($value->IssueConfirmedNotifications);
        $encoder->writeUInt32($value->TimeRemaining);
        $encoder->writeFloat($value->CovIncrement);
    }
}