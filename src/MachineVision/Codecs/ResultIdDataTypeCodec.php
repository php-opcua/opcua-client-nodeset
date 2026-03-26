<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\ResultIdDataType;

/**
 * Codec for the ResultIdDataType structured data type.
 *
 * @generated
 */
class ResultIdDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ResultIdDataType
     */
    public function decode(BinaryDecoder $decoder): ResultIdDataType
    {
        return new ResultIdDataType(
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
        $encoder->writeExtensionObject($value->Id);
    }
}