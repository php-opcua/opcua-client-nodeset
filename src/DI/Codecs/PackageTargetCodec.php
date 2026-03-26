<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\DI\Types\PackageTarget;

/**
 * Codec for the PackageTarget structured data type.
 *
 * @generated
 */
class PackageTargetCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PackageTarget
     */
    public function decode(BinaryDecoder $decoder): PackageTarget
    {
        return new PackageTarget(
            $decoder->readNodeId(),
            $decoder->readNodeId(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
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
        $encoder->writeNodeId($value->TargetType);
        $encoder->writeNodeId($value->TargetNode);
        $encoder->writeString($value->ProductInstanceUri);
        $encoder->writeString($value->AssetId);
        $encoder->writeString($value->ManufacturerUri);
        $encoder->writeString($value->ProductCode);
        $encoder->writeString($value->SerialNumber);
        $this->writeArray($encoder, $value->FxPath, fn ($item) => $encoder->writeExtensionObject($item));
        $this->writeArray($encoder, $value->FxScope, fn ($item) => $encoder->writeExtensionObject($item));
        $this->writeArray($encoder, $value->BrowsePath, fn ($item) => $encoder->writeExtensionObject($item));
        $encoder->writeString($value->TargetServer);
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
