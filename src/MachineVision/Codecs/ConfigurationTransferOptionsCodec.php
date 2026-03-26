<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\ConfigurationTransferOptions;

/**
 * Codec for the ConfigurationTransferOptions structured data type.
 *
 * @generated
 */
class ConfigurationTransferOptionsCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ConfigurationTransferOptions
     */
    public function decode(BinaryDecoder $decoder): ConfigurationTransferOptions
    {
        return new ConfigurationTransferOptions(
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
        $encoder->writeExtensionObject($value->InternalId);
    }
}
