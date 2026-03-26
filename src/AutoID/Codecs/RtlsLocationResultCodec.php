<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\RtlsLocationResult;

/**
 * Codec for the RtlsLocationResult structured data type.
 *
 * @generated
 */
class RtlsLocationResultCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RtlsLocationResult
     */
    public function decode(BinaryDecoder $decoder): RtlsLocationResult
    {
        return new RtlsLocationResult(
            $decoder->readDouble(),
            $decoder->readDouble(),
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
        $encoder->writeDouble($value->Speed);
        $encoder->writeDouble($value->Heading);
        $encoder->writeExtensionObject($value->Rotation);
        $encoder->writeExtensionObject($value->ReceiveTime);
    }
}