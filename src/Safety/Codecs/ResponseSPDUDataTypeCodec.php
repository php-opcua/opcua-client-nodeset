<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Safety\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Safety\Types\ResponseSPDUDataType;

/**
 * Codec for the ResponseSPDUDataType structured data type.
 *
 * @generated
 */
class ResponseSPDUDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ResponseSPDUDataType
     */
    public function decode(BinaryDecoder $decoder): ResponseSPDUDataType
    {
        return new ResponseSPDUDataType(
            Enums\OutFlagsType::from($decoder->readInt32()),
            $decoder->readUInt32(),
            $decoder->readUInt32(),
            $decoder->readUInt32(),
            $decoder->readUInt32(),
            $decoder->readUInt32(),
            $decoder->readUInt32(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->OutFlags->value);
        $encoder->writeUInt32($value->OutSPDU_ID_1);
        $encoder->writeUInt32($value->OutSPDU_ID_2);
        $encoder->writeUInt32($value->OutSPDU_ID_3);
        $encoder->writeUInt32($value->OutSafetyConsumerID);
        $encoder->writeUInt32($value->OutMonitoringNumber);
        $encoder->writeUInt32($value->OutCRC);
    }
}