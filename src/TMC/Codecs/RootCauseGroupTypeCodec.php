<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\RootCauseGroupType;

/**
 * Codec for the RootCauseGroupType structured data type.
 *
 * @generated
 */
class RootCauseGroupTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return RootCauseGroupType
     */
    public function decode(BinaryDecoder $decoder): RootCauseGroupType
    {
        return new RootCauseGroupType(
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
        $encoder->writeString($value->ParentID);
        $encoder->writeLocalizedText($value->Description);
    }
}