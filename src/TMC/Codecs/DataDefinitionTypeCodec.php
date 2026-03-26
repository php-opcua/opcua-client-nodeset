<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\TMC\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\TMC\Types\DataDefinitionType;

/**
 * Codec for the DataDefinitionType structured data type.
 *
 * @generated
 */
class DataDefinitionTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return DataDefinitionType
     */
    public function decode(BinaryDecoder $decoder): DataDefinitionType
    {
        return new DataDefinitionType(
            $decoder->readExtensionObject(),
            $decoder->readString(),
            Enums\ParameterDependencyEnumeration::from($decoder->readInt32()),
            $decoder->readString(),
            $decoder->readBoolean(),
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
        $encoder->writeExtensionObject($value->EngineeringUnits);
        $encoder->writeString($value->DisplayFormat);
        $encoder->writeInt32($value->Dependency->value);
        $encoder->writeString($value->DataType);
        $encoder->writeBoolean($value->UserSubset);
        $encoder->writeExtensionObject($value->ControlRange);
        $encoder->writeExtensionObject($value->AlarmRange);
    }
}
