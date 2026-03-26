<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MetalForming\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MetalForming\Types\CyclicPartInformationDataType;

/**
 * Codec for the CyclicPartInformationDataType structured data type.
 *
 * @generated
 */
class CyclicPartInformationDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return CyclicPartInformationDataType
     */
    public function decode(BinaryDecoder $decoder): CyclicPartInformationDataType
    {
        return new CyclicPartInformationDataType(
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->CycleCount);
        $encoder->writeString($value->PartId);
    }
}