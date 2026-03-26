<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\Rotation;

/**
 * Codec for the Rotation structured data type.
 *
 * @generated
 */
class RotationCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return Rotation
     */
    public function decode(BinaryDecoder $decoder): Rotation
    {
        return new Rotation(
            $decoder->readDouble(),
            $decoder->readDouble(),
            $decoder->readDouble(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeDouble($value->Yaw);
        $encoder->writeDouble($value->Pitch);
        $encoder->writeDouble($value->Roll);
    }
}