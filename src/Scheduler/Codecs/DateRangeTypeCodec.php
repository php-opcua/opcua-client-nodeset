<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scheduler\Types\DateRangeType;

/**
 * Codec for the DateRangeType structured data type.
 *
 * @generated
 */
class DateRangeTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return DateRangeType
     */
    public function decode(BinaryDecoder $decoder): DateRangeType
    {
        return new DateRangeType(
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
        $encoder->writeExtensionObject($value->StartDate);
        $encoder->writeExtensionObject($value->EndDate);
    }
}