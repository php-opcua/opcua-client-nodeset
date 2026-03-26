<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scales\Types\RecipeTargetValueType;

/**
 * Codec for the RecipeTargetValueType structured data type.
 *
 * @generated
 */
class RecipeTargetValueTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RecipeTargetValueType
     */
    public function decode(BinaryDecoder $decoder): RecipeTargetValueType
    {
        return new RecipeTargetValueType(
            $decoder->readUInt32(),
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
        $encoder->writeUInt32($value->TargetValueId);
        $encoder->writeNodeId($value->TargetValueNodeId);
        $encoder->writeLocalizedText($value->TargetValueName);
    }
}