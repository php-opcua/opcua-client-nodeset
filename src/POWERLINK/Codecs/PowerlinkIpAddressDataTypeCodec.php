<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\POWERLINK\Types\PowerlinkIpAddressDataType;

/**
 * Codec for the PowerlinkIpAddressDataType structured data type.
 *
 * @generated
 */
class PowerlinkIpAddressDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PowerlinkIpAddressDataType
     */
    public function decode(BinaryDecoder $decoder): PowerlinkIpAddressDataType
    {
        return new PowerlinkIpAddressDataType(
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
        $encoder->writeByte($value->b1);
        $encoder->writeByte($value->b2);
        $encoder->writeByte($value->b3);
        $encoder->writeByte($value->b4);
    }
}
