<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\ConfigurationDataType;

/**
 * Codec for the ConfigurationDataType structured data type.
 *
 * @generated
 */
class ConfigurationDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ConfigurationDataType
     */
    public function decode(BinaryDecoder $decoder): ConfigurationDataType
    {
        return new ConfigurationDataType(
            $decoder->readBoolean(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
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
        $encoder->writeBoolean($value->HasTransferableDataOnFile);
        $encoder->writeExtensionObject($value->ExternalId);
        $encoder->writeExtensionObject($value->InternalId);
        $encoder->writeExtensionObject($value->LastModified);
    }
}
