<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Safety\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Safety\Types\RequestSPDUDataType;

/**
 * Codec for the RequestSPDUDataType structured data type.
 *
 * @generated
 */
class RequestSPDUDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RequestSPDUDataType
     */
    public function decode(BinaryDecoder $decoder): RequestSPDUDataType
    {
        return new RequestSPDUDataType(
            $decoder->readUInt32(),
            $decoder->readUInt32(),
            Enums\InFlagsType::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt32($value->InSafetyConsumerID);
        $encoder->writeUInt32($value->InMonitoringNumber);
        $encoder->writeInt32($value->InFlags->value);
    }
}
