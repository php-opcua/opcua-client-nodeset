<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scheduler\Types\SpecialEventPeriodType;

/**
 * Codec for the SpecialEventPeriodType structured data type.
 *
 * @generated
 */
class SpecialEventPeriodTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return SpecialEventPeriodType
     */
    public function decode(BinaryDecoder $decoder): SpecialEventPeriodType
    {
        return new SpecialEventPeriodType(
            $decoder->readExtensionObject(),
            $decoder->readNodeId(),
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
        $encoder->writeNodeId($value->CalendarReference);
    }
}
