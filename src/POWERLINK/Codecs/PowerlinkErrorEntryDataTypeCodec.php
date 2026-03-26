<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\POWERLINK\Types\PowerlinkErrorEntryDataType;

/**
 * Codec for the PowerlinkErrorEntryDataType structured data type.
 *
 * @generated
 */
class PowerlinkErrorEntryDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PowerlinkErrorEntryDataType
     */
    public function decode(BinaryDecoder $decoder): PowerlinkErrorEntryDataType
    {
        return new PowerlinkErrorEntryDataType(
            $decoder->readUInt16(),
            $decoder->readUInt16(),
            $decoder->readUInt64(),
            $decoder->readUInt64(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeUInt16($value->entryType);
        $encoder->writeUInt16($value->errorCode);
        $encoder->writeUInt64($value->timeStamp);
        $encoder->writeUInt64($value->additionalInformation);
    }
}
