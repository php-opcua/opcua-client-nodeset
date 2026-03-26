<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetDateRange;

/**
 * Codec for the BACnetDateRange structured data type.
 *
 * @generated
 */
class BACnetDateRangeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetDateRange
     */
    public function decode(BinaryDecoder $decoder): BACnetDateRange
    {
        return new BACnetDateRange(
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
        $encoder->writeExtensionObject($value->EndTime);
    }
}