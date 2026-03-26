<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GDS\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\GDS\Types\ApplicationRecordDataType;

/**
 * Codec for the ApplicationRecordDataType structured data type.
 *
 * @generated
 */
class ApplicationRecordDataTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return ApplicationRecordDataType
     */
    public function decode(BinaryDecoder $decoder): ApplicationRecordDataType
    {
        return new ApplicationRecordDataType(
            $decoder->readNodeId(),
            $decoder->readString(),
            $decoder->readExtensionObject(),
            $this->readArray($decoder, fn () => $decoder->readLocalizedText()),
            $decoder->readString(),
            $this->readArray($decoder, fn () => $decoder->readString()),
            $this->readArray($decoder, fn () => $decoder->readString()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeNodeId($value->ApplicationId);
        $encoder->writeString($value->ApplicationUri);
        $encoder->writeExtensionObject($value->ApplicationType);
        $this->writeArray($encoder, $value->ApplicationNames, fn ($item) => $encoder->writeLocalizedText($item));
        $encoder->writeString($value->ProductUri);
        $this->writeArray($encoder, $value->DiscoveryUrls, fn ($item) => $encoder->writeString($item));
        $this->writeArray($encoder, $value->ServerCapabilities, fn ($item) => $encoder->writeString($item));
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
