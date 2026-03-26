<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scales\Types\RecipeReportElementType;

/**
 * Codec for the RecipeReportElementType structured data type.
 *
 * @generated
 */
class RecipeReportElementTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RecipeReportElementType
     */
    public function decode(BinaryDecoder $decoder): RecipeReportElementType
    {
        return new RecipeReportElementType(
            $decoder->readLocalizedText(),
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
        $encoder->writeLocalizedText($value->ReportMessage);
        $encoder->writeExtensionObject($value->Timestamp);
    }
}