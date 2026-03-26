<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\ScanSettings;

/**
 * Codec for the ScanSettings structured data type.
 *
 * @generated
 */
class ScanSettingsCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ScanSettings
     */
    public function decode(BinaryDecoder $decoder): ScanSettings
    {
        return new ScanSettings(
            $decoder->readExtensionObject(),
            $decoder->readInt32(),
            $decoder->readBoolean(),
            Enums\LocationTypeEnumeration::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeExtensionObject($value->Duration);
        $encoder->writeInt32($value->Cycles);
        $encoder->writeBoolean($value->DataAvailable);
        $encoder->writeInt32($value->LocationType->value);
    }
}