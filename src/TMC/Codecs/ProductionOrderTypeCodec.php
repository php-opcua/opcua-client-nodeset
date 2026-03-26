<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\ProductionOrderType;

/**
 * Codec for the ProductionOrderType structured data type.
 *
 * @generated
 */
class ProductionOrderTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ProductionOrderType
     */
    public function decode(BinaryDecoder $decoder): ProductionOrderType
    {
        return new ProductionOrderType(
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->Header);
        $encoder->writeExtensionObject($value->MaterialList);
        $encoder->writeExtensionObject($value->DataSet);
    }
}
