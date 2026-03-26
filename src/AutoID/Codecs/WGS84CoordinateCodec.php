<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\WGS84Coordinate;

/**
 * Codec for the WGS84Coordinate structured data type.
 *
 * @generated
 */
class WGS84CoordinateCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return WGS84Coordinate
     */
    public function decode(BinaryDecoder $decoder): WGS84Coordinate
    {
        return new WGS84Coordinate(
            $decoder->readString(),
            $decoder->readDouble(),
            $decoder->readString(),
            $decoder->readDouble(),
            $decoder->readDouble(),
            $decoder->readExtensionObject(),
            $decoder->readDouble(),
            $decoder->readInt32(),
            $decoder->readInt32(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->N_S_Hemisphere);
        $encoder->writeDouble($value->Latitude);
        $encoder->writeString($value->E_W_Hemisphere);
        $encoder->writeDouble($value->Longitude);
        $encoder->writeDouble($value->Altitude);
        $encoder->writeExtensionObject($value->Timestamp);
        $encoder->writeDouble($value->DilutionOfPrecision);
        $encoder->writeInt32($value->UsefulPrecisionLatLon);
        $encoder->writeInt32($value->UsefulPrecisionAlt);
    }
}
