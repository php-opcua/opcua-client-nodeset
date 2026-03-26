<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\FDI\Types\RegistrationParameters;

/**
 * Codec for the RegistrationParameters structured data type.
 *
 * @generated
 */
class RegistrationParametersCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RegistrationParameters
     */
    public function decode(BinaryDecoder $decoder): RegistrationParameters
    {
        return new RegistrationParameters(
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
        $encoder->writeExtensionObject($value->Path);
        $encoder->writeUInt32($value->SelectionFlags);
    }
}
