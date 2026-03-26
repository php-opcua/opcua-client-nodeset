<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\SystemStateDescriptionDataType;

/**
 * Codec for the SystemStateDescriptionDataType structured data type.
 *
 * @generated
 */
class SystemStateDescriptionDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return SystemStateDescriptionDataType
     */
    public function decode(BinaryDecoder $decoder): SystemStateDescriptionDataType
    {
        return new SystemStateDescriptionDataType(
            Enums\SystemStateDataType::from($decoder->readInt32()),
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
        $encoder->writeInt32($value->State->value);
        $encoder->writeExtensionObject($value->StateDescription);
    }
}