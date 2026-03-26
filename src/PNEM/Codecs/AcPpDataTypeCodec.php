<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PNEM\Types\AcPpDataType;

/**
 * Codec for the AcPpDataType structured data type.
 *
 * @generated
 */
class AcPpDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return AcPpDataType
     */
    public function decode(BinaryDecoder $decoder): AcPpDataType
    {
        return new AcPpDataType(
            $decoder->readFloat(),
            $decoder->readFloat(),
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
        $encoder->writeFloat($value->A_b);
        $encoder->writeFloat($value->B_c);
        $encoder->writeFloat($value->C_a);
    }
}
