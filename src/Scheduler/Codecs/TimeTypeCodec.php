<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scheduler\Types\TimeType;

/**
 * Codec for the TimeType structured data type.
 *
 * @generated
 */
class TimeTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return TimeType
     */
    public function decode(BinaryDecoder $decoder): TimeType
    {
        return new TimeType(
            $decoder->readByte(),
            $decoder->readByte(),
            $decoder->readByte(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeByte($value->Hour);
        $encoder->writeByte($value->Minute);
        $encoder->writeByte($value->Second);
    }
}