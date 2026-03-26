<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\Location;

/**
 * Codec for the Location structured data type.
 *
 * @generated
 */
class LocationCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return Location
     */
    public function decode(BinaryDecoder $decoder): Location
    {
        return new Location(
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
        $encoder->writeExtensionObject($value->NMEA);
        $encoder->writeExtensionObject($value->Local);
        $encoder->writeExtensionObject($value->WGS84);
        $encoder->writeExtensionObject($value->Name);
    }
}
