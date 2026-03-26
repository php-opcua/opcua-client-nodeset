<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PackML\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\PackML\Types\PackMLRemoteInterfaceDataType;

/**
 * Codec for the PackMLRemoteInterfaceDataType structured data type.
 *
 * @generated
 */
class PackMLRemoteInterfaceDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PackMLRemoteInterfaceDataType
     */
    public function decode(BinaryDecoder $decoder): PackMLRemoteInterfaceDataType
    {
        return new PackMLRemoteInterfaceDataType(
            $decoder->readInt32(),
            $decoder->readInt32(),
            $decoder->readInt32(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->Number);
        $encoder->writeInt32($value->ControlCmdNumber);
        $encoder->writeInt32($value->CmdValue);
        $this->writeArray($encoder, $value->Parameter, fn ($item) => $encoder->writeExtensionObject($item));
    }

    private function readArray(BinaryDecoder $decoder, callable $readItem): array
    {
        $count = $decoder->readInt32();
        $items = [];
        for ($i = 0; $i < $count; $i++) {
            $items[] = $readItem();
        }

        return $items;
    }

    private function writeArray(BinaryEncoder $encoder, array $items, callable $writeItem): void
    {
        $encoder->writeInt32(count($items));
        foreach ($items as $item) {
            $writeItem($item);
        }
    }
}
