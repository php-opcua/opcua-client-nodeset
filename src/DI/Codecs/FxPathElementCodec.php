<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\DI\Types\FxPathElement;

/**
 * Codec for the FxPathElement structured data type.
 *
 * @generated
 */
class FxPathElementCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return FxPathElement
     */
    public function decode(BinaryDecoder $decoder): FxPathElement
    {
        return new FxPathElement(
            $decoder->readNodeId(),
            $decoder->readUInt16(),
            $decoder->readString(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeNodeId($value->AssetConnectorType);
        $encoder->writeUInt16($value->ConnectorId);
        $encoder->writeString($value->ConnectorName);
    }
}
