<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\IREDES\Types\IRLengthDataType;

/**
 * Codec for the IRLengthDataType structured data type.
 *
 * @generated
 */
class IRLengthDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return IRLengthDataType
     */
    public function decode(BinaryDecoder $decoder): IRLengthDataType
    {
        return new IRLengthDataType(
            $decoder->readDouble(),
            $decoder->readExtensionObject(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeDouble($value->Value);
        $encoder->writeExtensionObject($value->Unit);
    }
}