<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\RfidAccessResult;

/**
 * Codec for the RfidAccessResult structured data type.
 *
 * @generated
 */
class RfidAccessResultCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RfidAccessResult
     */
    public function decode(BinaryDecoder $decoder): RfidAccessResult
    {
        return new RfidAccessResult(
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readInt32(),
            $decoder->readInt32(),
            $decoder->readUInt16(),
            $decoder->readString(),
            $decoder->readInt32(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeExtensionObject($value->CodeTypeRWData);
        $encoder->writeExtensionObject($value->RWData);
        $encoder->writeInt32($value->Antenna);
        $encoder->writeInt32($value->CurrentPowerLevel);
        $encoder->writeUInt16($value->PC);
        $encoder->writeString($value->Polarization);
        $encoder->writeInt32($value->Strength);
    }
}
