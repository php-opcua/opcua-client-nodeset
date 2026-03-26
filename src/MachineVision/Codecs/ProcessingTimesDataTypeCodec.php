<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\MachineVision\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\MachineVision\Types\ProcessingTimesDataType;

/**
 * Codec for the ProcessingTimesDataType structured data type.
 *
 * @generated
 */
class ProcessingTimesDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ProcessingTimesDataType
     */
    public function decode(BinaryDecoder $decoder): ProcessingTimesDataType
    {
        return new ProcessingTimesDataType(
            $decoder->readExtensionObject(),
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
        $encoder->writeExtensionObject($value->StartTime);
        $encoder->writeExtensionObject($value->EndTime);
        $encoder->writeExtensionObject($value->AcquisitionDuration);
        $encoder->writeExtensionObject($value->ProcessingDuration);
    }
}