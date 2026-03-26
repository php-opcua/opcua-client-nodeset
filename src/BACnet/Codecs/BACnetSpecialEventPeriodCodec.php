<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetSpecialEventPeriod;

/**
 * Codec for the BACnetSpecialEventPeriod structured data type.
 *
 * @generated
 */
class BACnetSpecialEventPeriodCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetSpecialEventPeriod
     */
    public function decode(BinaryDecoder $decoder): BACnetSpecialEventPeriod
    {
        return new BACnetSpecialEventPeriod(
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
        $encoder->writeExtensionObject($value->CalendarEntry);
        $encoder->writeExtensionObject($value->CalendarReference);
    }
}
