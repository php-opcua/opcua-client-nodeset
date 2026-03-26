<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\LADS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\LADS\Types\SampleInfoType;

/**
 * Codec for the SampleInfoType structured data type.
 *
 * @generated
 */
class SampleInfoTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return SampleInfoType
     */
    public function decode(BinaryDecoder $decoder): SampleInfoType
    {
        return new SampleInfoType(
            $decoder->readString(),
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
        $encoder->writeString($value->ContainerId);
        $encoder->writeString($value->SampleId);
        $encoder->writeString($value->Position);
        $encoder->writeString($value->CustomData);
    }
}