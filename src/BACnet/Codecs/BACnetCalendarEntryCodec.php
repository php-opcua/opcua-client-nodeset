<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetCalendarEntry;

/**
 * Codec for the BACnetCalendarEntry structured data type.
 *
 * @generated
 */
class BACnetCalendarEntryCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetCalendarEntry
     */
    public function decode(BinaryDecoder $decoder): BACnetCalendarEntry
    {
        return new BACnetCalendarEntry(
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->Date);
        $encoder->writeExtensionObject($value->DateRange);
        $encoder->writeExtensionObject($value->WeekNDay);
    }
}
