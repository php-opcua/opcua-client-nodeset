<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PROFINET\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PROFINET\Types\PnIM5DataType;

/**
 * Codec for the PnIM5DataType structured data type.
 *
 * @generated
 */
class PnIM5DataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PnIM5DataType
     */
    public function decode(BinaryDecoder $decoder): PnIM5DataType
    {
        return new PnIM5DataType(
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readUInt16(),
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
        $encoder->writeString($value->Annotation);
        $encoder->writeString($value->OrderId);
        $encoder->writeUInt16($value->VendorId);
        $encoder->writeString($value->SerialNumber);
        $encoder->writeString($value->HardwareRevision);
        $encoder->writeString($value->SoftwareRevision);
    }
}
