<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\ProductIdDataType;

/**
 * Codec for the ProductIdDataType structured data type.
 *
 * @generated
 */
class ProductIdDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ProductIdDataType
     */
    public function decode(BinaryDecoder $decoder): ProductIdDataType
    {
        return new ProductIdDataType(
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->Id);
        $encoder->writeLocalizedText($value->Description);
    }
}
