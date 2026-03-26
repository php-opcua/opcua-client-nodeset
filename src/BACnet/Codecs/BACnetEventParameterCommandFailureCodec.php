<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterCommandFailure;

/**
 * Codec for the BACnetEventParameterCommandFailure structured data type.
 *
 * @generated
 */
class BACnetEventParameterCommandFailureCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterCommandFailure
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterCommandFailure
    {
        return new BACnetEventParameterCommandFailure(
            $decoder->readUInt32(),
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
        $encoder->writeUInt32($value->Time_delay);
        $encoder->writeExtensionObject($value->Feedback_property_reference);
    }
}
