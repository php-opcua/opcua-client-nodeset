<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\RfidSighting;

/**
 * Codec for the RfidSighting structured data type.
 *
 * @generated
 */
class RfidSightingCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RfidSighting
     */
    public function decode(BinaryDecoder $decoder): RfidSighting
    {
        return new RfidSighting(
            $decoder->readInt32(),
            $decoder->readInt32(),
            $decoder->readExtensionObject(),
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
        $encoder->writeInt32($value->Antenna);
        $encoder->writeInt32($value->Strength);
        $encoder->writeExtensionObject($value->Timestamp);
        $encoder->writeInt32($value->CurrentPowerLevel);
    }
}