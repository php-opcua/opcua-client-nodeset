<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\FDI\Types\RegisteredNode;

/**
 * Codec for the RegisteredNode structured data type.
 *
 * @generated
 */
class RegisteredNodeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RegisteredNode
     */
    public function decode(BinaryDecoder $decoder): RegisteredNode
    {
        return new RegisteredNode(
            $decoder->readInt32(),
            $decoder->readNodeId(),
            $decoder->readNodeId(),
            $decoder->readNodeId(),
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
        $encoder->writeInt32($value->NodeStatus);
        $encoder->writeNodeId($value->OnlineContextNodeId);
        $encoder->writeNodeId($value->OnlineDeviceNodeId);
        $encoder->writeNodeId($value->OfflineContextNodeId);
        $encoder->writeNodeId($value->OfflineDeviceNodeId);
    }
}
