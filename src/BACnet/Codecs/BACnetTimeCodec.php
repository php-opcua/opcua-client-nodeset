<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetTime;

/**
 * Codec for the BACnetTime structured data type.
 *
 * @generated
 */
class BACnetTimeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetTime
     */
    public function decode(BinaryDecoder $decoder): BACnetTime
    {
        return new BACnetTime(
            $decoder->readByte(),
            $decoder->readByte(),
            $decoder->readByte(),
            $decoder->readByte(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeByte($value->Hour);
        $encoder->writeByte($value->Minute);
        $encoder->writeByte($value->Second);
        $encoder->writeByte($value->Hundredths);
    }
}