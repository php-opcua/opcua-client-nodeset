<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\GPOS\Types\GlobalPositionDataType;

/**
 * Codec for the GlobalPositionDataType structured data type.
 *
 * @generated
 */
class GlobalPositionDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return GlobalPositionDataType
     */
    public function decode(BinaryDecoder $decoder): GlobalPositionDataType
    {
        return new GlobalPositionDataType(
            $decoder->readDouble(),
            $decoder->readFloat(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeDouble($value->Accuracy);
        $encoder->writeFloat($value->Floor);
    }
}