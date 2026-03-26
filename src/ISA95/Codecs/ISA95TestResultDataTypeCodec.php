<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\ISA95\Types\ISA95TestResultDataType;

/**
 * Codec for the ISA95TestResultDataType structured data type.
 *
 * @generated
 */
class ISA95TestResultDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ISA95TestResultDataType
     */
    public function decode(BinaryDecoder $decoder): ISA95TestResultDataType
    {
        return new ISA95TestResultDataType(
            $decoder->readNodeId(),
            $decoder->readLocalizedText(),
            $decoder->readDateTime(),
            $decoder->readExtensionObject(),
            $decoder->readString(),
            $decoder->readDateTime(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeNodeId($value->Id);
        $encoder->writeLocalizedText($value->TestResultDescription);
        $encoder->writeDateTime($value->Date);
        $encoder->writeExtensionObject($value->Result);
        $encoder->writeString($value->ResultUnitOfMeasure);
        $encoder->writeDateTime($value->Expiration);
    }
}
