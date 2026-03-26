<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AMB\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AMB\Types\NameNodeIdDataType;

/**
 * Codec for the NameNodeIdDataType structured data type.
 *
 * @generated
 */
class NameNodeIdDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return NameNodeIdDataType
     */
    public function decode(BinaryDecoder $decoder): NameNodeIdDataType
    {
        return new NameNodeIdDataType(
            $decoder->readLocalizedText(),
            $decoder->readNodeId(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeLocalizedText($value->Name);
        $encoder->writeNodeId($value->NodeId);
    }
}
