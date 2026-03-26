<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PNEM\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PNEM\Types\PeVersionDataType;

/**
 * Codec for the PeVersionDataType structured data type.
 *
 * @generated
 */
class PeVersionDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PeVersionDataType
     */
    public function decode(BinaryDecoder $decoder): PeVersionDataType
    {
        return new PeVersionDataType(
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
        $encoder->writeByte($value->Revision);
    }
}
