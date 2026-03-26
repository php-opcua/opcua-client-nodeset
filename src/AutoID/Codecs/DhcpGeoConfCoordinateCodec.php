<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\DhcpGeoConfCoordinate;

/**
 * Codec for the DhcpGeoConfCoordinate structured data type.
 *
 * @generated
 */
class DhcpGeoConfCoordinateCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return DhcpGeoConfCoordinate
     */
    public function decode(BinaryDecoder $decoder): DhcpGeoConfCoordinate
    {
        return new DhcpGeoConfCoordinate(
            $decoder->readByte(),
            $decoder->readInt16(),
            $decoder->readInt32(),
            $decoder->readByte(),
            $decoder->readInt16(),
            $decoder->readInt32(),
            $decoder->readByte(),
            $decoder->readByte(),
            $decoder->readInt32(),
            $decoder->readInt16(),
            $decoder->readByte(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeByte($value->LaRes);
        $encoder->writeInt16($value->LatitudeInteger);
        $encoder->writeInt32($value->LatitudeFraction);
        $encoder->writeByte($value->LoRes);
        $encoder->writeInt16($value->LongitudeInteger);
        $encoder->writeInt32($value->LongitudeFraction);
        $encoder->writeByte($value->AT);
        $encoder->writeByte($value->AltRes);
        $encoder->writeInt32($value->AltitudeInteger);
        $encoder->writeInt16($value->AltitudeFraction);
        $encoder->writeByte($value->Datum);
    }
}
