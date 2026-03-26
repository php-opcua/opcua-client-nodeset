<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\OpticalScanResult;

/**
 * Codec for the OpticalScanResult structured data type.
 *
 * @generated
 */
class OpticalScanResultCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return OpticalScanResult
     */
    public function decode(BinaryDecoder $decoder): OpticalScanResult
    {
        return new OpticalScanResult(
            $decoder->readFloat(),
            $decoder->readExtensionObject(),
            $decoder->readString(),
            $decoder->readNodeId(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeFloat($value->Grade);
        $encoder->writeExtensionObject($value->Position);
        $encoder->writeString($value->Symbology);
        $encoder->writeNodeId($value->ImageId);
    }
}