<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scales\Types\PrintableWeightType;

/**
 * Codec for the PrintableWeightType structured data type.
 *
 * @generated
 */
class PrintableWeightTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PrintableWeightType
     */
    public function decode(BinaryDecoder $decoder): PrintableWeightType
    {
        return new PrintableWeightType(
            $decoder->readString(),
            $decoder->readString(),
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
        $encoder->writeString($value->Gross);
        $encoder->writeString($value->Net);
        $encoder->writeString($value->Tare);
    }
}
