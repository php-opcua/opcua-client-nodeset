<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\BACnet\Types\BACnetEventParameterChangeOfLifeSafety;

/**
 * Codec for the BACnetEventParameterChangeOfLifeSafety structured data type.
 *
 * @generated
 */
class BACnetEventParameterChangeOfLifeSafetyCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BACnetEventParameterChangeOfLifeSafety
     */
    public function decode(BinaryDecoder $decoder): BACnetEventParameterChangeOfLifeSafety
    {
        return new BACnetEventParameterChangeOfLifeSafety(
            Enums\BACnetLifeSafetyState::from($decoder->readInt32()),
            Enums\BACnetLifeSafetyMode::from($decoder->readInt32()),
            Enums\BACnetLifeSafetyOperation::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->NewState->value);
        $encoder->writeInt32($value->NewMode->value);
        $encoder->writeInt32($value->OperationExtended->value);
    }
}
