<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\FDI\Types\EddDataTypeInfo;

/**
 * Codec for the EddDataTypeInfo structured data type.
 *
 * @generated
 */
class EddDataTypeInfoCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return EddDataTypeInfo
     */
    public function decode(BinaryDecoder $decoder): EddDataTypeInfo
    {
        return new EddDataTypeInfo(
            Enums\EddDataTypeEnum::from($decoder->readInt32()),
            $decoder->readUInt32(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->EddDataType->value);
        $encoder->writeUInt32($value->Size);
    }
}
