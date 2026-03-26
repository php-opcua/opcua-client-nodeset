<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PADIM\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PADIM\Types\ChemicalSubstanceDataType;

/**
 * Codec for the ChemicalSubstanceDataType structured data type.
 *
 * @generated
 */
class ChemicalSubstanceDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ChemicalSubstanceDataType
     */
    public function decode(BinaryDecoder $decoder): ChemicalSubstanceDataType
    {
        return new ChemicalSubstanceDataType(
            Enums\PatDictionaryEnum::from($decoder->readInt32()),
            $decoder->readLocalizedText(),
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
        $encoder->writeInt32($value->PatDictionary->value);
        $encoder->writeLocalizedText($value->Label);
        $encoder->writeLocalizedText($value->Id);
    }
}