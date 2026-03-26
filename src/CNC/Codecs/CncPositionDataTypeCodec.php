<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CNC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\CNC\Types\CncPositionDataType;

/**
 * Codec for the CncPositionDataType structured data type.
 *
 * @generated
 */
class CncPositionDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return CncPositionDataType
     */
    public function decode(BinaryDecoder $decoder): CncPositionDataType
    {
        return new CncPositionDataType(
            $decoder->readDouble(),
            $decoder->readDouble(),
            $decoder->readDouble(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeDouble($value->ActPos);
        $encoder->writeDouble($value->CmdPos);
        $encoder->writeDouble($value->RemDist);
    }
}