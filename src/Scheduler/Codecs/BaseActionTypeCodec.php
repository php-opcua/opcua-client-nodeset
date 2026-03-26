<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Scheduler\Types\BaseActionType;

/**
 * Codec for the BaseActionType structured data type.
 *
 * @generated
 */
class BaseActionTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BaseActionType
     */
    public function decode(BinaryDecoder $decoder): BaseActionType
    {
        return new BaseActionType(
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
        $encoder->writeExtensionObject($value->LastActionResult);
    }
}