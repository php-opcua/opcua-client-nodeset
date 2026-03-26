<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MetalForming\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MetalForming\Types\CyclicProcessValueDataType;

/**
 * Codec for the CyclicProcessValueDataType structured data type.
 *
 * @generated
 */
class CyclicProcessValueDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return CyclicProcessValueDataType
     */
    public function decode(BinaryDecoder $decoder): CyclicProcessValueDataType
    {
        return new CyclicProcessValueDataType(
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readBoolean(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeExtensionObject($value->AnalogSignal);
        $encoder->writeExtensionObject($value->Setpoint);
        $encoder->writeExtensionObject($value->CycleCount);
        $encoder->writeBoolean($value->IsActive);
    }
}
