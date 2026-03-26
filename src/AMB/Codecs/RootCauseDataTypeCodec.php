<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AMB\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AMB\Types\RootCauseDataType;

/**
 * Codec for the RootCauseDataType structured data type.
 *
 * @generated
 */
class RootCauseDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RootCauseDataType
     */
    public function decode(BinaryDecoder $decoder): RootCauseDataType
    {
        return new RootCauseDataType(
            $decoder->readNodeId(),
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
        $encoder->writeNodeId($value->RootCauseId);
        $encoder->writeLocalizedText($value->RootCause);
    }
}
