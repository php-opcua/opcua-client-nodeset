<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\ScanResult;

/**
 * Codec for the ScanResult structured data type.
 *
 * @generated
 */
class ScanResultCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ScanResult
     */
    public function decode(BinaryDecoder $decoder): ScanResult
    {
        return new ScanResult(
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->CodeType);
        $encoder->writeExtensionObject($value->ScanData);
        $encoder->writeExtensionObject($value->Timestamp);
        $encoder->writeExtensionObject($value->Location);
    }
}
