<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MTConnect\Types\ThreeSpaceSampleDataType;

/**
 * Codec for the ThreeSpaceSampleDataType structured data type.
 *
 * @generated
 */
class ThreeSpaceSampleDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ThreeSpaceSampleDataType
     */
    public function decode(BinaryDecoder $decoder): ThreeSpaceSampleDataType
    {
        return new ThreeSpaceSampleDataType(
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
        $encoder->writeDouble($value->X);
        $encoder->writeDouble($value->Y);
        $encoder->writeDouble($value->Z);
    }
}
