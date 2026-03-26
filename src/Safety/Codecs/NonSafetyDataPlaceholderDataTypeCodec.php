<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Safety\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Safety\Types\NonSafetyDataPlaceholderDataType;

/**
 * Codec for the NonSafetyDataPlaceholderDataType structured data type.
 *
 * @generated
 */
class NonSafetyDataPlaceholderDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return NonSafetyDataPlaceholderDataType
     */
    public function decode(BinaryDecoder $decoder): NonSafetyDataPlaceholderDataType
    {
        return new NonSafetyDataPlaceholderDataType(
            $decoder->readBoolean(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeBoolean($value->Dummy);
    }
}