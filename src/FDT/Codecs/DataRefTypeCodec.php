<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\FDT\Types\DataRefType;

/**
 * Codec for the DataRefType structured data type.
 *
 * @generated
 */
class DataRefTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return DataRefType
     */
    public function decode(BinaryDecoder $decoder): DataRefType
    {
        return new DataRefType(
            $decoder->readString(),
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
        $encoder->writeString($value->DataId);
        $encoder->writeExtensionObject($value->SemanticInfo);
    }
}