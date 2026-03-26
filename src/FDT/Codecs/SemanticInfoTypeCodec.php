<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\FDT\Types\SemanticInfoType;

/**
 * Codec for the SemanticInfoType structured data type.
 *
 * @generated
 */
class SemanticInfoTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return SemanticInfoType
     */
    public function decode(BinaryDecoder $decoder): SemanticInfoType
    {
        return new SemanticInfoType(
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
        $encoder->writeString($value->ApplicationDomain);
        $encoder->writeString($value->SemanticId);
    }
}
