<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scales\Types\WeightType;

/**
 * Codec for the WeightType structured data type.
 *
 * @generated
 */
class WeightTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return WeightType
     */
    public function decode(BinaryDecoder $decoder): WeightType
    {
        return new WeightType(
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
        $encoder->writeDouble($value->Gross);
        $encoder->writeDouble($value->Net);
        $encoder->writeDouble($value->Tare);
    }
}