<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Pumps\Types\PhysicalAddressDataType;

/**
 * Codec for the PhysicalAddressDataType structured data type.
 *
 * @generated
 */
class PhysicalAddressDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PhysicalAddressDataType
     */
    public function decode(BinaryDecoder $decoder): PhysicalAddressDataType
    {
        return new PhysicalAddressDataType(
            $decoder->readLocalizedText(),
            $decoder->readLocalizedText(),
            $decoder->readLocalizedText(),
            $decoder->readLocalizedText(),
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
        $encoder->writeLocalizedText($value->Street);
        $encoder->writeLocalizedText($value->Number);
        $encoder->writeLocalizedText($value->City);
        $encoder->writeLocalizedText($value->PostalCode);
        $encoder->writeLocalizedText($value->State);
        $encoder->writeLocalizedText($value->Country);
    }
}
