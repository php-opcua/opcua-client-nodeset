<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\IREDES\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\IREDES\Types\JobAssignmentTimeDataType;

/**
 * Codec for the JobAssignmentTimeDataType structured data type.
 *
 * @generated
 */
class JobAssignmentTimeDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return JobAssignmentTimeDataType
     */
    public function decode(BinaryDecoder $decoder): JobAssignmentTimeDataType
    {
        return new JobAssignmentTimeDataType(
            $decoder->readDateTime(),
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
        $encoder->writeDateTime($value->ExpectedFinishTime);
        $encoder->writeExtensionObject($value->ExpectedDuration);
    }
}