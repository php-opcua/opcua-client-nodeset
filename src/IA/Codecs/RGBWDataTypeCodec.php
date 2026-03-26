<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IA\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\IA\Types\RGBWDataType;

/**
 * Codec for the RGBWDataType structured data type.
 *
 * @generated
 */
class RGBWDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RGBWDataType
     */
    public function decode(BinaryDecoder $decoder): RGBWDataType
    {
        return new RGBWDataType(
            $decoder->readByte(),
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
        $encoder->writeByte($value->Red);
        $encoder->writeByte($value->Green);
        $encoder->writeByte($value->Blue);
        $encoder->writeByte($value->White);
    }
}
