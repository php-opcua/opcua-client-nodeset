<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MTConnect\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MTConnect\Types\AssetEventDataType;

/**
 * Codec for the AssetEventDataType structured data type.
 *
 * @generated
 */
class AssetEventDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return AssetEventDataType
     */
    public function decode(BinaryDecoder $decoder): AssetEventDataType
    {
        return new AssetEventDataType(
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
        $encoder->writeString($value->AssetId);
        $encoder->writeString($value->AssetType);
    }
}
