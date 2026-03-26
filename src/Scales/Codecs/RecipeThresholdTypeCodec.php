<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scales\Types\RecipeThresholdType;

/**
 * Codec for the RecipeThresholdType structured data type.
 *
 * @generated
 */
class RecipeThresholdTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RecipeThresholdType
     */
    public function decode(BinaryDecoder $decoder): RecipeThresholdType
    {
        return new RecipeThresholdType(
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
        $encoder->writeUInt32($value->ThresholdId);
        $encoder->writeNodeId($value->ThresholdNodeId);
        $encoder->writeLocalizedText($value->ThresholdName);
    }
}
