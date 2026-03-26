<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\DI\Types\TransferResultErrorDataType;

/**
 * Codec for the TransferResultErrorDataType structured data type.
 *
 * @generated
 */
class TransferResultErrorDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return TransferResultErrorDataType
     */
    public function decode(BinaryDecoder $decoder): TransferResultErrorDataType
    {
        return new TransferResultErrorDataType(
            $decoder->readInt32(),
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
        $encoder->writeInt32($value->Status);
        $encoder->writeExtensionObject($value->Diagnostics);
    }
}