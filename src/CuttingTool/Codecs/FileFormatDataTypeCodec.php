<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CuttingTool\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\CuttingTool\Types\FileFormatDataType;

/**
 * Codec for the FileFormatDataType structured data type.
 *
 * @generated
 */
class FileFormatDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return FileFormatDataType
     */
    public function decode(BinaryDecoder $decoder): FileFormatDataType
    {
        return new FileFormatDataType(
            $decoder->readString(),
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
        $encoder->writeString($value->Name);
        $encoder->writeString($value->FileExtension);
        $encoder->writeExtensionObject($value->Version);
    }
}