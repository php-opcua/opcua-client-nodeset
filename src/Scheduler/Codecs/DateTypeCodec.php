<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scheduler\Types\DateType;

/**
 * Codec for the DateType structured data type.
 *
 * @generated
 */
class DateTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return DateType
     */
    public function decode(BinaryDecoder $decoder): DateType
    {
        return new DateType(
            $decoder->readUInt16(),
            Enums\Month::from($decoder->readInt32()),
            Enums\DayOfMonth::from($decoder->readInt32()),
            Enums\DayOfWeek::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt16($value->Year);
        $encoder->writeInt32($value->Month->value);
        $encoder->writeInt32($value->DayOfMonth->value);
        $encoder->writeInt32($value->DayOfWeek->value);
    }
}
