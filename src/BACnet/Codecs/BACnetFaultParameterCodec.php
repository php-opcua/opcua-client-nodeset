<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetFaultParameter;

/**
 * Codec for the BACnetFaultParameter structured data type.
 *
 * @generated
 */
class BACnetFaultParameterCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetFaultParameter
     */
    public function decode(BinaryDecoder $decoder): BACnetFaultParameter
    {
        return new BACnetFaultParameter(
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
        $encoder->writeExtensionObject($value->Fault_characterstring);
        $encoder->writeExtensionObject($value->Fault_life_safety);
        $encoder->writeExtensionObject($value->Fault_state);
        $encoder->writeExtensionObject($value->Fault_status_flags);
        $encoder->writeExtensionObject($value->Fault_extended);
    }
}