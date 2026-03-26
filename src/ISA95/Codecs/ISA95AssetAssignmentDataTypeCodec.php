<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ISA95\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\ISA95\Types\ISA95AssetAssignmentDataType;

/**
 * Codec for the ISA95AssetAssignmentDataType structured data type.
 *
 * @generated
 */
class ISA95AssetAssignmentDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ISA95AssetAssignmentDataType
     */
    public function decode(BinaryDecoder $decoder): ISA95AssetAssignmentDataType
    {
        return new ISA95AssetAssignmentDataType(
            $decoder->readNodeId(),
            $decoder->readLocalizedText(),
            $decoder->readDateTime(),
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
        $encoder->writeLocalizedText($value->AssinmentDescription);
        $encoder->writeDateTime($value->StartTime);
        $encoder->writeDateTime($value->EndTime);
    }
}