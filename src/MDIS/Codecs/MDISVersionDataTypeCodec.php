<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MDIS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MDIS\Types\MDISVersionDataType;

/**
 * Codec for the MDISVersionDataType structured data type.
 *
 * @generated
 */
class MDISVersionDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MDISVersionDataType
     */
    public function decode(BinaryDecoder $decoder): MDISVersionDataType
    {
        return new MDISVersionDataType(
            $decoder->readByte(),
            $decoder->readByte(),
            $decoder->readByte(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeByte($value->MajorVersion);
        $encoder->writeByte($value->MinorVersion);
        $encoder->writeByte($value->Build);
    }
}
