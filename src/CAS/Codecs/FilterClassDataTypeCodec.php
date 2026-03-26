<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\CAS\Types\FilterClassDataType;

/**
 * Codec for the FilterClassDataType structured data type.
 *
 * @generated
 */
class FilterClassDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return FilterClassDataType
     */
    public function decode(BinaryDecoder $decoder): FilterClassDataType
    {
        return new FilterClassDataType(
            Enums\FilterClassEnum::from($decoder->readInt32()),
            Enums\FilterClassEnum::from($decoder->readInt32()),
            Enums\FilterClassEnum::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->A->value);
        $encoder->writeInt32($value->B->value);
        $encoder->writeInt32($value->C->value);
    }
}
