<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Woodworking\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Woodworking\Types\WwMessageArgumentDataType;

/**
 * Codec for the WwMessageArgumentDataType structured data type.
 *
 * @generated
 */
class WwMessageArgumentDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return WwMessageArgumentDataType
     */
    public function decode(BinaryDecoder $decoder): WwMessageArgumentDataType
    {
        return new WwMessageArgumentDataType(
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
        $encoder->writeExtensionObject($value->Value);
    }
}
