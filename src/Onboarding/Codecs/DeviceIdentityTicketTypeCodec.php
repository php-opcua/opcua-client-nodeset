<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Onboarding\Types\DeviceIdentityTicketType;

/**
 * Codec for the DeviceIdentityTicketType structured data type.
 *
 * @generated
 */
class DeviceIdentityTicketTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return DeviceIdentityTicketType
     */
    public function decode(BinaryDecoder $decoder): DeviceIdentityTicketType
    {
        return new DeviceIdentityTicketType(
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
        $encoder->writeExtensionObject($value->ProductInstanceUri);
    }
}
