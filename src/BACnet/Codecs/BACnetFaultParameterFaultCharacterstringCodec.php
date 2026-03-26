<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetFaultParameterFaultCharacterstring;

/**
 * Codec for the BACnetFaultParameterFaultCharacterstring structured data type.
 *
 * @generated
 */
class BACnetFaultParameterFaultCharacterstringCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetFaultParameterFaultCharacterstring
     */
    public function decode(BinaryDecoder $decoder): BACnetFaultParameterFaultCharacterstring
    {
        return new BACnetFaultParameterFaultCharacterstring(
            $decoder->readString(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->Fault_characterstring);
    }
}
