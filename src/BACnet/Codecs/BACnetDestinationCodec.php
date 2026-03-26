<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetDestination;

/**
 * Codec for the BACnetDestination structured data type.
 *
 * @generated
 */
class BACnetDestinationCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetDestination
     */
    public function decode(BinaryDecoder $decoder): BACnetDestination
    {
        return new BACnetDestination(
            Enums\BACnetDaysOfWeek::from($decoder->readInt32()),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readUInt32(),
            $decoder->readBoolean(),
            Enums\BACnetEventTransitionBits::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->ValidDays->value);
        $encoder->writeExtensionObject($value->FromTime);
        $encoder->writeExtensionObject($value->ToTime);
        $encoder->writeExtensionObject($value->Recipient);
        $encoder->writeUInt32($value->ProcessIdentifier);
        $encoder->writeBoolean($value->IssueConfirmedNotifications);
        $encoder->writeInt32($value->Transitions->value);
    }
}
