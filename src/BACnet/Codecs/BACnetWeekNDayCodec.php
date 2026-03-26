<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetWeekNDay;

/**
 * Codec for the BACnetWeekNDay structured data type.
 *
 * @generated
 */
class BACnetWeekNDayCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetWeekNDay
     */
    public function decode(BinaryDecoder $decoder): BACnetWeekNDay
    {
        return new BACnetWeekNDay(
            Enums\BACnetMonth::from($decoder->readInt32()),
            Enums\BACnetDay::from($decoder->readInt32()),
            Enums\BACnetDayOfWeek::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->Month->value);
        $encoder->writeInt32($value->Day->value);
        $encoder->writeInt32($value->DayOfWeek->value);
    }
}
