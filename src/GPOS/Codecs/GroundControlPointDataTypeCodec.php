<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GPOS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\GPOS\Types\GroundControlPointDataType;

/**
 * Codec for the GroundControlPointDataType structured data type.
 *
 * @generated
 */
class GroundControlPointDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return GroundControlPointDataType
     */
    public function decode(BinaryDecoder $decoder): GroundControlPointDataType
    {
        return new GroundControlPointDataType(
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
        $encoder->writeExtensionObject($value->GlobalPosition);
        $encoder->writeExtensionObject($value->LocalPosition);
    }
}
