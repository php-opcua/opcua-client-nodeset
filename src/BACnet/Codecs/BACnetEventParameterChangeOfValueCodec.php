<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterChangeOfValue;

/**
 * Codec for the BACnetEventParameterChangeOfValue structured data type.
 *
 * @generated
 */
class BACnetEventParameterChangeOfValueCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterChangeOfValue
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterChangeOfValue
    {
        return new BACnetEventParameterChangeOfValue(
            $decoder->readUInt32(),
            $decoder->readExtensionObject(),
            $decoder->readFloat(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt32($value->Time_delay);
        $encoder->writeExtensionObject($value->Cov_criteria_bitmask);
        $encoder->writeFloat($value->Cov_criteria_referenced_property_increment);
    }
}
