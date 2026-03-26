<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\GPOS\Types\_3DGeographicCoordinateDataType;

/**
 * Codec for the _3DGeographicCoordinateDataType structured data type.
 *
 * @generated
 */
class _3DGeographicCoordinateDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return _3DGeographicCoordinateDataType
     */
    public function decode(BinaryDecoder $decoder): _3DGeographicCoordinateDataType
    {
        return new _3DGeographicCoordinateDataType(
            $decoder->readDouble(),
            $decoder->readDouble(),
            $decoder->readDouble(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeDouble($value->Longitude);
        $encoder->writeDouble($value->Latitude);
        $encoder->writeDouble($value->Elevation);
    }
}
