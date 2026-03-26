<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\OcrScanResult;

/**
 * Codec for the OcrScanResult structured data type.
 *
 * @generated
 */
class OcrScanResultCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return OcrScanResult
     */
    public function decode(BinaryDecoder $decoder): OcrScanResult
    {
        return new OcrScanResult(
            $decoder->readNodeId(),
            $decoder->readByte(),
            $decoder->readExtensionObject(),
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
        $encoder->writeNodeId($value->ImageId);
        $encoder->writeByte($value->Quality);
        $encoder->writeExtensionObject($value->Position);
        $encoder->writeString($value->Font);
        $encoder->writeExtensionObject($value->DecodingTime);
    }
}
