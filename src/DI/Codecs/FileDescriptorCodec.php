<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\DI\Types\FileDescriptor;

/**
 * Codec for the FileDescriptor structured data type.
 *
 * @generated
 */
class FileDescriptorCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return FileDescriptor
     */
    public function decode(BinaryDecoder $decoder): FileDescriptor
    {
        return new FileDescriptor(
            Enums\FileType::from($decoder->readInt32()),
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
        $encoder->writeInt32($value->FileType->value);
        $encoder->writeString($value->FileName);
        $encoder->writeString($value->MimeType);
        $encoder->writeString($value->Language);
    }
}