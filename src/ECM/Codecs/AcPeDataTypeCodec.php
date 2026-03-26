<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ECM\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\ECM\Types\AcPeDataType;

/**
 * Codec for the AcPeDataType structured data type.
 *
 * @generated
 */
class AcPeDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return AcPeDataType
     */
    public function decode(BinaryDecoder $decoder): AcPeDataType
    {
        return new AcPeDataType(
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
        $encoder->writeFloat($value->L1);
        $encoder->writeFloat($value->L2);
        $encoder->writeFloat($value->L3);
    }
}