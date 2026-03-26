<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\MaterialStorageBufferDataType;

/**
 * Codec for the MaterialStorageBufferDataType structured data type.
 *
 * @generated
 */
class MaterialStorageBufferDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return MaterialStorageBufferDataType
     */
    public function decode(BinaryDecoder $decoder): MaterialStorageBufferDataType
    {
        return new MaterialStorageBufferDataType(
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $decoder->readExtensionObject(),
            $decoder->readDouble(),
            Enums\StorageLogicEnumeration::from($decoder->readInt32()),
            Enums\StorageMixingLogicEnumeration::from($decoder->readInt32()),
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
        $encoder->writeExtensionObject($value->StoredMaterial);
        $encoder->writeExtensionObject($value->EngineeringUnits);
        $encoder->writeDouble($value->TotalStorageCapacity);
        $encoder->writeInt32($value->StorageLogic->value);
        $encoder->writeInt32($value->MixingLogic->value);
    }
}