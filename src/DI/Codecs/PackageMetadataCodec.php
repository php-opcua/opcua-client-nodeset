<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\DI\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\DI\Types\PackageMetadata;

/**
 * Codec for the PackageMetadata structured data type.
 *
 * @generated
 */
class PackageMetadataCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return PackageMetadata
     */
    public function decode(BinaryDecoder $decoder): PackageMetadata
    {
        return new PackageMetadata(
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            Enums\PackageType::from($decoder->readInt32()),
            $decoder->readString(),
            $decoder->readBoolean(),
            $decoder->readString(),
            $decoder->readDateTime(),
            $decoder->readString(),
            $decoder->readString(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
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
        $encoder->writeString($value->Name);
        $encoder->writeString($value->Description);
        $encoder->writeString($value->ManufacturerUri);
        $encoder->writeString($value->Manufacturer);
        $encoder->writeString($value->PackageRevision);
        $encoder->writeInt32($value->PackageType->value);
        $encoder->writeString($value->SoftwareSubClass);
        $encoder->writeBoolean($value->DeployCompletePackage);
        $encoder->writeString($value->SoftwareRevision);
        $encoder->writeDateTime($value->ReleaseDate);
        $encoder->writeString($value->TargetManufacturerUri);
        $encoder->writeString($value->TargetManufacturer);
        $this->writeArray($encoder, $value->UpdateTargets, fn ($item) => $encoder->writeExtensionObject($item));
        $this->writeArray($encoder, $value->Files, fn ($item) => $encoder->writeExtensionObject($item));
        $this->writeArray($encoder, $value->Compatibilities, fn ($item) => $encoder->writeExtensionObject($item));
        $this->writeArray($encoder, $value->Assignments, fn ($item) => $encoder->writeExtensionObject($item));
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
