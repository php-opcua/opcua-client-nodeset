<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\FDI\Types\TransferIncident;

/**
 * Codec for the TransferIncident structured data type.
 *
 * @generated
 */
class TransferIncidentCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return TransferIncident
     */
    public function decode(BinaryDecoder $decoder): TransferIncident
    {
        return new TransferIncident(
            $decoder->readNodeId(),
            $decoder->readExtensionObject(),
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
        $encoder->writeNodeId($value->ContextNodeId);
        $encoder->writeExtensionObject($value->StatusCode);
        $encoder->writeExtensionObject($value->Diagnostics);
    }
}