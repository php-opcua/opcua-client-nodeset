<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\LocalCoordinate;

/**
 * Codec for the LocalCoordinate structured data type.
 *
 * @generated
 */
class LocalCoordinateCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return LocalCoordinate
     */
    public function decode(BinaryDecoder $decoder): LocalCoordinate
    {
        return new LocalCoordinate(
            $decoder->readDouble(),
            $decoder->readDouble(),
            $decoder->readDouble(),
            $decoder->readExtensionObject(),
            $decoder->readDouble(),
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
        $encoder->writeDouble($value->X);
        $encoder->writeDouble($value->Y);
        $encoder->writeDouble($value->Z);
        $encoder->writeExtensionObject($value->Timestamp);
        $encoder->writeDouble($value->DilutionOfPrecision);
        $encoder->writeInt32($value->UsefulPrecision);
    }
}
