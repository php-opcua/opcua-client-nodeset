<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetRecipientProcess;

/**
 * Codec for the BACnetRecipientProcess structured data type.
 *
 * @generated
 */
class BACnetRecipientProcessCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetRecipientProcess
     */
    public function decode(BinaryDecoder $decoder): BACnetRecipientProcess
    {
        return new BACnetRecipientProcess(
            $decoder->readExtensionObject(),
            $decoder->readUInt32(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeExtensionObject($value->Recipient);
        $encoder->writeUInt32($value->ProcessIdentifier);
    }
}
