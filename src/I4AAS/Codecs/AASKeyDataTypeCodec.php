<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\I4AAS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\I4AAS\Types\AASKeyDataType;

/**
 * Codec for the AASKeyDataType structured data type.
 *
 * @generated
 */
class AASKeyDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return AASKeyDataType
     */
    public function decode(BinaryDecoder $decoder): AASKeyDataType
    {
        return new AASKeyDataType(
            Enums\AASKeyElementsDataType::from($decoder->readInt32()),
            $decoder->readBoolean(),
            $decoder->readString(),
            Enums\AASKeyTypeDataType::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->Type->value);
        $encoder->writeBoolean($value->Local);
        $encoder->writeString($value->Value);
        $encoder->writeInt32($value->IdType->value);
    }
}