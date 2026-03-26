<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\PartIdDataType;

/**
 * Codec for the PartIdDataType structured data type.
 *
 * @generated
 */
class PartIdDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PartIdDataType
     */
    public function decode(BinaryDecoder $decoder): PartIdDataType
    {
        return new PartIdDataType(
            $decoder->readExtensionObject(),
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
        $encoder->writeLocalizedText($value->Description);
    }
}