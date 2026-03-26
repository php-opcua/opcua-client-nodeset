<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\Position;

/**
 * Codec for the Position structured data type.
 *
 * @generated
 */
class PositionCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return Position
     */
    public function decode(BinaryDecoder $decoder): Position
    {
        return new Position(
            $decoder->readInt32(),
            $decoder->readInt32(),
            $decoder->readInt32(),
            $decoder->readInt32(),
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
        $encoder->writeInt32($value->PositionX);
        $encoder->writeInt32($value->PositionY);
        $encoder->writeInt32($value->SizeX);
        $encoder->writeInt32($value->SizeY);
        $encoder->writeInt32($value->Rotation);
    }
}