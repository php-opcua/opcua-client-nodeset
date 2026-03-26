<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameter;

/**
 * Codec for the BACnetEventParameter structured data type.
 *
 * @generated
 */
class BACnetEventParameterCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameter
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameter
    {
        return new BACnetEventParameter(
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->Change_of_bitstring);
        $encoder->writeExtensionObject($value->Change_of_state);
        $encoder->writeExtensionObject($value->Change_of_value);
        $encoder->writeExtensionObject($value->Command_failure);
        $encoder->writeExtensionObject($value->Floating_limit);
        $encoder->writeExtensionObject($value->Out_of_range);
        $encoder->writeExtensionObject($value->Extended);
        $encoder->writeExtensionObject($value->Buffer_ready);
        $encoder->writeExtensionObject($value->Unsigned_range);
        $encoder->writeExtensionObject($value->Double_out_of_range);
        $encoder->writeExtensionObject($value->Signed_out_of_range);
        $encoder->writeExtensionObject($value->Unsigned_out_of_range);
        $encoder->writeExtensionObject($value->Change_of_characterstring);
        $encoder->writeExtensionObject($value->Change_of_life_safety);
    }
}
