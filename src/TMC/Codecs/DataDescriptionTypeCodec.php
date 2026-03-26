<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\DataDescriptionType;

/**
 * Codec for the DataDescriptionType structured data type.
 *
 * @generated
 */
class DataDescriptionTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return DataDescriptionType
     */
    public function decode(BinaryDecoder $decoder): DataDescriptionType
    {
        return new DataDescriptionType(
            $decoder->readString(),
            $decoder->readString(),
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
        $encoder->writeString($value->ID);
        $encoder->writeString($value->MES_ID);
        $encoder->writeLocalizedText($value->Description);
    }
}
