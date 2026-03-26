<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\POWERLINK\Types\PowerlinkPDOMappingEntryDataType;

/**
 * Codec for the PowerlinkPDOMappingEntryDataType structured data type.
 *
 * @generated
 */
class PowerlinkPDOMappingEntryDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PowerlinkPDOMappingEntryDataType
     */
    public function decode(BinaryDecoder $decoder): PowerlinkPDOMappingEntryDataType
    {
        return new PowerlinkPDOMappingEntryDataType(
            $decoder->readUInt16(),
            $decoder->readUInt16(),
            $decoder->readByte(),
            $decoder->readByte(),
            $decoder->readUInt16(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt16($value->length);
        $encoder->writeUInt16($value->offset);
        $encoder->writeByte($value->reserved);
        $encoder->writeByte($value->subIndex);
        $encoder->writeUInt16($value->index);
    }
}