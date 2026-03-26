<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\DI\Types\UpdateTarget;

/**
 * Codec for the UpdateTarget structured data type.
 *
 * @generated
 */
class UpdateTargetCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return UpdateTarget
     */
    public function decode(BinaryDecoder $decoder): UpdateTarget
    {
        return new UpdateTarget(
            $decoder->readString(),
            $decoder->readString(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->ProductCode);
        $encoder->writeString($value->Model);
    }
}