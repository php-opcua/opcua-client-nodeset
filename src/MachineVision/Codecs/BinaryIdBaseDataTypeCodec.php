<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\BinaryIdBaseDataType;

/**
 * Codec for the BinaryIdBaseDataType structured data type.
 *
 * @generated
 */
class BinaryIdBaseDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BinaryIdBaseDataType
     */
    public function decode(BinaryDecoder $decoder): BinaryIdBaseDataType
    {
        return new BinaryIdBaseDataType(
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readByteString(),
            $decoder->readString(),
            $decoder->readLocalizedText(),
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
        $encoder->writeExtensionObject($value->Version);
        $encoder->writeByteString($value->Hash);
        $encoder->writeString($value->HashAlgorithm);
        $encoder->writeLocalizedText($value->Description);
    }
}
