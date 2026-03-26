<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scheduler\Types\WriteLocalVariableActionType;

/**
 * Codec for the WriteLocalVariableActionType structured data type.
 *
 * @generated
 */
class WriteLocalVariableActionTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return WriteLocalVariableActionType
     */
    public function decode(BinaryDecoder $decoder): WriteLocalVariableActionType
    {
        return new WriteLocalVariableActionType(
            $decoder->readNodeId(),
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
        $encoder->writeNodeId($value->Variable);
        $encoder->writeExtensionObject($value->Value);
    }
}