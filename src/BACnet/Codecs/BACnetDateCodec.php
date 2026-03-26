<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetDate;

/**
 * Codec for the BACnetDate structured data type.
 *
 * @generated
 */
class BACnetDateCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetDate
     */
    public function decode(BinaryDecoder $decoder): BACnetDate
    {
        return new BACnetDate(
            $decoder->readExtensionObject(),
            Enums\BACnetMonth::from($decoder->readInt32()),
            Enums\BACnetDayOfMonth::from($decoder->readInt32()),
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
        $encoder->writeExtensionObject($value->Year);
        $encoder->writeInt32($value->Month->value);
        $encoder->writeInt32($value->DayOfMonth->value);
        $encoder->writeInt32($value->DayOfWeek->value);
    }
}