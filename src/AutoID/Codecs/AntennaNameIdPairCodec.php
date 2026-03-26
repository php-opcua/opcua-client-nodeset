<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\AntennaNameIdPair;

/**
 * Codec for the AntennaNameIdPair structured data type.
 *
 * @generated
 */
class AntennaNameIdPairCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return AntennaNameIdPair
     */
    public function decode(BinaryDecoder $decoder): AntennaNameIdPair
    {
        return new AntennaNameIdPair(
            $decoder->readInt32(),
            $decoder->readString(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->AntennaId);
        $encoder->writeString($value->AntennaName);
    }
}